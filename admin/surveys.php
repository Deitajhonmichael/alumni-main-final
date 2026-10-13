<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Handle survey actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['action']) && $_POST['action'] === 'add') {
            $title = sanitizeInput($_POST['title']);
            $description = sanitizeInput($_POST['description']);
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            
            $stmt = $conn->prepare("
                INSERT INTO surveys (title, description, start_date, end_date) 
                VALUES (?, ?, ?, ?)
            ");
            $stmt->execute([$title, $description, $start_date, $end_date]);
            $survey_id = $conn->lastInsertId();
            
            // Add questions
            if (isset($_POST['questions'])) {
                foreach ($_POST['questions'] as $index => $question) {
                    $question_text = sanitizeInput($question['text']);
                    $question_type = $question['type'];
                    $options = isset($question['options']) ? sanitizeInput($question['options']) : null;
                    $is_required = isset($question['required']) ? 1 : 0;
                    
                    $stmt = $conn->prepare("
                        INSERT INTO survey_questions (survey_id, question_text, question_type, options, is_required, question_order) 
                        VALUES (?, ?, ?, ?, ?, ?)
                    ");
                    $stmt->execute([$survey_id, $question_text, $question_type, $options, $is_required, $index]);
                }
            }
            
            logActivity(getCurrentUserId(), 'Added survey', 'surveys', $survey_id);
            flashMessage('success', 'Survey added successfully!');
            redirect('surveys.php');
        }
        
        if (isset($_POST['action']) && $_POST['action'] === 'delete') {
            $id = $_POST['id'];
            $stmt = $conn->prepare("DELETE FROM surveys WHERE id = ?");
            $stmt->execute([$id]);
            
            logActivity(getCurrentUserId(), 'Deleted survey', 'surveys', $id);
            flashMessage('success', 'Survey deleted successfully!');
            redirect('surveys.php');
        }
    } catch(PDOException $e) {
        flashMessage('danger', 'Error: ' . $e->getMessage());
    }
}

// Get all surveys
$stmt = $conn->query("
    SELECT s.*, 
           (SELECT COUNT(*) FROM survey_responses WHERE survey_id = s.id) as response_count,
           (SELECT COUNT(*) FROM survey_questions WHERE survey_id = s.id) as question_count
    FROM surveys s 
    ORDER BY s.end_date DESC
");
$surveys = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Surveys - <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 5px 10px;
            border-radius: 8px;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.2);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="p-4">
                    <h4><i class="fas fa-shield-alt"></i> Admin</h4>
                    <p class="small opacity-75">Management Panel</p>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                    <a class="nav-link" href="alumni.php"><i class="fas fa-users me-2"></i> Alumni</a>
                    <a class="nav-link" href="transcripts.php"><i class="fas fa-file-alt me-2"></i> Transcripts</a>
                    <a class="nav-link" href="tracking.php"><i class="fas fa-chart-line me-2"></i> Tracking</a>
                    <a class="nav-link" href="placements.php"><i class="fas fa-briefcase me-2"></i> Placements</a>
                    <a class="nav-link" href="events.php"><i class="fas fa-calendar me-2"></i> Events</a>
                    <a class="nav-link" href="reunions.php"><i class="fas fa-users me-2"></i> Reunions</a>
                    <a class="nav-link" href="campaigns.php"><i class="fas fa-heart me-2"></i> Campaigns</a>
                    <a class="nav-link" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
                    <a class="nav-link" href="newsletter.php"><i class="fas fa-envelope me-2"></i> Newsletter</a>
                    <a class="nav-link" href="feedback.php"><i class="fas fa-comment me-2"></i> Feedback</a>
                    <a class="nav-link active" href="surveys.php"><i class="fas fa-poll me-2"></i> Surveys</a>
                    <a class="nav-link" href="users.php"><i class="fas fa-user-cog me-2"></i> Users</a>
                    <a class="nav-link" href="reports.php"><i class="fas fa-chart-bar me-2"></i> Reports</a>
                    <hr class="my-2 mx-3" style="border-color: rgba(255,255,255,0.3);">
                    <a class="nav-link" href="../dashboard.php"><i class="fas fa-arrow-left me-2"></i> Back to Alumni</a>
                    <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <?php $flash = getFlashMessage(); ?>
                <?php if ($flash): ?>
                    <div class="alert alert-<?php echo $flash['type']; ?> alert-dismissible fade show">
                        <?php echo $flash['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Manage Surveys</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="fas fa-plus me-2"></i>Add Survey
                    </button>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <?php if ($surveys): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Questions</th>
                                            <th>Responses</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($surveys as $survey): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($survey['title']); ?></td>
                                                <td><?php echo $survey['question_count']; ?></td>
                                                <td><?php echo $survey['response_count']; ?></td>
                                                <td><?php echo formatDate($survey['start_date']); ?></td>
                                                <td><?php echo formatDate($survey['end_date']); ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $survey['is_active'] ? 'success' : 'danger'; ?>">
                                                        <?php echo $survey['is_active'] ? 'Active' : 'Inactive'; ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <form method="POST" action="" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                        <input type="hidden" name="action" value="delete">
                                                        <input type="hidden" name="id" value="<?php echo $survey['id']; ?>">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="fas fa-poll fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No surveys found.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Survey</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="2"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" required>
                            </div>
                        </div>
                        <hr>
                        <h6>Questions</h6>
                        <div id="questions-container">
                            <div class="question-item mb-3 p-3 border rounded">
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="questions[0][text]" placeholder="Question text" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <select class="form-select" name="questions[0][type]">
                                            <option value="text">Text</option>
                                            <option value="multiple_choice">Multiple Choice</option>
                                            <option value="rating">Rating (1-5)</option>
                                            <option value="boolean">Yes/No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control" name="questions[0][options]" placeholder="Options (comma separated for MC)">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="questions[0][required]" id="req0" checked>
                                            <label class="form-check-label" for="req0">Required</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-secondary" onclick="addQuestion()">
                            <i class="fas fa-plus me-1"></i>Add Question
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Survey</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        let questionCount = 1;
        
        function addQuestion() {
            const container = document.getElementById('questions-container');
            const questionHtml = `
                <div class="question-item mb-3 p-3 border rounded">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="questions[${questionCount}][text]" placeholder="Question text" required>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <select class="form-select" name="questions[${questionCount}][type]">
                                <option value="text">Text</option>
                                <option value="multiple_choice">Multiple Choice</option>
                                <option value="rating">Rating (1-5)</option>
                                <option value="boolean">Yes/No</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control" name="questions[${questionCount}][options]" placeholder="Options (comma separated for MC)">
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="questions[${questionCount}][required]" id="req${questionCount}" checked>
                                <label class="form-check-label" for="req${questionCount}">Required</label>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', questionHtml);
            questionCount++;
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
