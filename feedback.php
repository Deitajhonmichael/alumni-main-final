<?php
require_once 'config.php';
requireLogin();
requireVerification();

$conn = getDBConnection();
$alumni_id = getCurrentAlumniId();

// Handle feedback submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'submit') {
    try {
        $category = $_POST['category'];
        $subject = sanitizeInput($_POST['subject']);
        $message = sanitizeInput($_POST['message']);
        $rating = $_POST['rating'];
        
        $stmt = $conn->prepare("
            INSERT INTO feedback (alumni_id, category, subject, message, rating) 
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->execute([$alumni_id, $category, $subject, $message, $rating]);
        
        logActivity(getCurrentUserId(), 'Submitted feedback', 'feedback', $conn->lastInsertId());
        flashMessage('success', 'Thank you for your feedback!');
        redirect('feedback.php');
    } catch(PDOException $e) {
        flashMessage('danger', 'Error submitting feedback: ' . $e->getMessage());
    }
}

// Get my feedback
$stmt = $conn->prepare("
    SELECT * FROM feedback 
    WHERE alumni_id = ? 
    ORDER BY submitted_date DESC
");
$stmt->execute([$alumni_id]);
$feedback_list = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        .star-rating {
            color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="p-4">
                    <h4><i class="fas fa-graduation-cap"></i> Alumni</h4>
                    <p class="small opacity-75">Management System</p>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="dashboard.php"><i class="fas fa-home me-2"></i> Dashboard</a>
                    <a class="nav-link" href="profile.php"><i class="fas fa-user me-2"></i> My Profile</a>
                    <a class="nav-link" href="transcripts.php"><i class="fas fa-file-alt me-2"></i> Transcripts</a>
                    <a class="nav-link" href="tracking.php"><i class="fas fa-chart-line me-2"></i> Graduate Tracking</a>
                    <a class="nav-link" href="placements.php"><i class="fas fa-briefcase me-2"></i> Job Placements</a>
                    <a class="nav-link" href="events.php"><i class="fas fa-calendar me-2"></i> Events</a>
                    <a class="nav-link" href="reunions.php"><i class="fas fa-users me-2"></i> Reunions</a>
                    <a class="nav-link" href="donations.php"><i class="fas fa-heart me-2"></i> Donations</a>
                    <a class="nav-link" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
                    <a class="nav-link" href="newsletter.php"><i class="fas fa-envelope me-2"></i> Newsletter</a>
                    <a class="nav-link active" href="feedback.php"><i class="fas fa-comment me-2"></i> Feedback</a>
                    <a class="nav-link" href="surveys.php"><i class="fas fa-poll me-2"></i> Surveys</a>
                    <hr class="my-2 mx-3" style="border-color: rgba(255,255,255,0.3);">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
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
                
                <h2 class="mb-4">Feedback & Suggestions</h2>
                
                <div class="row">
                    <!-- Submit Feedback Form -->
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="fas fa-paper-plane me-2"></i>Submit Feedback</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <input type="hidden" name="action" value="submit">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="form-select" name="category" required>
                                            <option value="general">General</option>
                                            <option value="event">Events</option>
                                            <option value="website">Website</option>
                                            <option value="services">Services</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Rating (1-5)</label>
                                        <div class="star-rating">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <input type="radio" name="rating" value="<?php echo $i; ?>" id="star<?php echo $i; ?>" required>
                                                <label for="star<?php echo $i; ?>"><i class="fas fa-star"></i></label>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" name="message" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Feedback History -->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="fas fa-history me-2"></i>My Feedback History</h5>
                            </div>
                            <div class="card-body">
                                <?php if ($feedback_list): ?>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Subject</th>
                                                    <th>Category</th>
                                                    <th>Rating</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($feedback_list as $feedback): ?>
                                                    <tr>
                                                        <td><?php echo htmlspecialchars($feedback['subject']); ?></td>
                                                        <td>
                                                            <span class="badge bg-info"><?php echo ucfirst($feedback['category']); ?></span>
                                                        </td>
                                                        <td>
                                                            <span class="star-rating">
                                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                                    <i class="fas fa-star<?php echo $i <= $feedback['rating'] ? '' : '-o'; ?>"></i>
                                                                <?php endfor; ?>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-<?php echo $feedback['status'] === 'resolved' ? 'success' : ($feedback['status'] === 'reviewed' ? 'info' : 'warning'); ?>">
                                                                <?php echo ucfirst($feedback['status']); ?>
                                                            </span>
                                                        </td>
                                                        <td><?php echo formatDate($feedback['submitted_date']); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php else: ?>
                                    <div class="text-center py-5">
                                        <i class="fas fa-comment fa-3x text-muted mb-3"></i>
                                        <p class="text-muted">No feedback submitted yet.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
