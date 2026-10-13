<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Handle reunion actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['action']) && $_POST['action'] === 'add') {
            $batch = sanitizeInput($_POST['batch']);
            $reunion_title = sanitizeInput($_POST['reunion_title']);
            $reunion_date = $_POST['reunion_date'];
            $location = sanitizeInput($_POST['location']);
            $description = sanitizeInput($_POST['description']);
            $budget = $_POST['budget'];
            $expected_attendees = $_POST['expected_attendees'];
            $status = $_POST['status'];
            
            $stmt = $conn->prepare("
                INSERT INTO batch_reunions (batch, reunion_title, reunion_date, location, description, budget, expected_attendees, status) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([$batch, $reunion_title, $reunion_date, $location, $description, $budget, $expected_attendees, $status]);
            
            logActivity(getCurrentUserId(), 'Added batch reunion', 'batch_reunions', $conn->lastInsertId());
            flashMessage('success', 'Reunion added successfully!');
            redirect('reunions.php');
        }
        
        if (isset($_POST['action']) && $_POST['action'] === 'edit') {
            $id = $_POST['id'];
            $batch = sanitizeInput($_POST['batch']);
            $reunion_title = sanitizeInput($_POST['reunion_title']);
            $reunion_date = $_POST['reunion_date'];
            $location = sanitizeInput($_POST['location']);
            $description = sanitizeInput($_POST['description']);
            $budget = $_POST['budget'];
            $expected_attendees = $_POST['expected_attendees'];
            $status = $_POST['status'];
            
            $stmt = $conn->prepare("
                UPDATE batch_reunions SET 
                    batch = ?, reunion_title = ?, reunion_date = ?, location = ?, 
                    description = ?, budget = ?, expected_attendees = ?, status = ?
                WHERE id = ?
            ");
            $stmt->execute([$batch, $reunion_title, $reunion_date, $location, $description, $budget, $expected_attendees, $status, $id]);
            
            logActivity(getCurrentUserId(), 'Updated batch reunion', 'batch_reunions', $id);
            flashMessage('success', 'Reunion updated successfully!');
            redirect('reunions.php');
        }
        
        if (isset($_POST['action']) && $_POST['action'] === 'delete') {
            $id = $_POST['id'];
            $stmt = $conn->prepare("DELETE FROM batch_reunions WHERE id = ?");
            $stmt->execute([$id]);
            
            logActivity(getCurrentUserId(), 'Deleted batch reunion', 'batch_reunions', $id);
            flashMessage('success', 'Reunion deleted successfully!');
            redirect('reunions.php');
        }
    } catch(PDOException $e) {
        flashMessage('danger', 'Error: ' . $e->getMessage());
    }
}

// Get all reunions
$stmt = $conn->query("
    SELECT br.*, 
           (SELECT COUNT(*) FROM reunion_attendees WHERE reunion_id = br.id) as attendee_count
    FROM batch_reunions br 
    ORDER BY br.reunion_date DESC
");
$reunions = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reunions - <?php echo SITE_NAME; ?></title>
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
                    <a class="nav-link active" href="reunions.php"><i class="fas fa-users me-2"></i> Reunions</a>
                    <a class="nav-link" href="campaigns.php"><i class="fas fa-heart me-2"></i> Campaigns</a>
                    <a class="nav-link" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
                    <a class="nav-link" href="newsletter.php"><i class="fas fa-envelope me-2"></i> Newsletter</a>
                    <a class="nav-link" href="feedback.php"><i class="fas fa-comment me-2"></i> Feedback</a>
                    <a class="nav-link" href="surveys.php"><i class="fas fa-poll me-2"></i> Surveys</a>
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
                    <h2>Manage Batch Reunions</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="fas fa-plus me-2"></i>Add Reunion
                    </button>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <?php if ($reunions): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Batch</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Attendees</th>
                                            <th>Budget</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($reunions as $reunion): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($reunion['reunion_title']); ?></td>
                                                <td><?php echo htmlspecialchars($reunion['batch']); ?></td>
                                                <td><?php echo formatDate($reunion['reunion_date']); ?></td>
                                                <td><?php echo htmlspecialchars($reunion['location']); ?></td>
                                                <td><?php echo $reunion['attendee_count']; ?><?php echo $reunion['expected_attendees'] ? '/' . $reunion['expected_attendees'] : ''; ?></td>
                                                <td><?php echo $reunion['budget'] ? formatCurrency($reunion['budget']) : '-'; ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $reunion['status'] === 'completed' ? 'success' : ($reunion['status'] === 'confirmed' ? 'primary' : ($reunion['status'] === 'cancelled' ? 'danger' : 'warning')); ?>">
                                                        <?php echo ucfirst($reunion['status']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $reunion['id']; ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <form method="POST" action="" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                        <input type="hidden" name="action" value="delete">
                                                        <input type="hidden" name="id" value="<?php echo $reunion['id']; ?>">
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
                                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No reunions found.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Reunion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add">
                        <div class="mb-3">
                            <label class="form-label">Batch</label>
                            <input type="text" class="form-control" name="batch" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reunion Title</label>
                            <input type="text" class="form-control" name="reunion_title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reunion Date</label>
                            <input type="date" class="form-control" name="reunion_date" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" name="location" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Budget ($)</label>
                                <input type="number" step="0.01" class="form-control" name="budget">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Expected Attendees</label>
                                <input type="number" class="form-control" name="expected_attendees">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="planning">Planning</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Reunion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Modals -->
    <?php foreach ($reunions as $reunion): ?>
        <div class="modal fade" id="editModal<?php echo $reunion['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Reunion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id" value="<?php echo $reunion['id']; ?>">
                            <div class="mb-3">
                                <label class="form-label">Batch</label>
                                <input type="text" class="form-control" name="batch" value="<?php echo htmlspecialchars($reunion['batch']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Reunion Title</label>
                                <input type="text" class="form-control" name="reunion_title" value="<?php echo htmlspecialchars($reunion['reunion_title']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Reunion Date</label>
                                <input type="date" class="form-control" name="reunion_date" value="<?php echo htmlspecialchars($reunion['reunion_date']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" name="location" value="<?php echo htmlspecialchars($reunion['location']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3"><?php echo htmlspecialchars($reunion['description']); ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Budget ($)</label>
                                    <input type="number" step="0.01" class="form-control" name="budget" value="<?php echo htmlspecialchars($reunion['budget']); ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Expected Attendees</label>
                                    <input type="number" class="form-control" name="expected_attendees" value="<?php echo htmlspecialchars($reunion['expected_attendees']); ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="planning" <?php echo $reunion['status'] === 'planning' ? 'selected' : ''; ?>>Planning</option>
                                    <option value="confirmed" <?php echo $reunion['status'] === 'confirmed' ? 'selected' : ''; ?>>Confirmed</option>
                                    <option value="completed" <?php echo $reunion['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
                                    <option value="cancelled" <?php echo $reunion['status'] === 'cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Reunion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
