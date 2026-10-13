<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Handle transcript actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['action']) && $_POST['action'] === 'update') {
            $id = $_POST['id'];
            $status = $_POST['status'];
            $admin_notes = sanitizeInput($_POST['admin_notes']);
            
            $stmt = $conn->prepare("
                UPDATE transcript_requests SET status = ?, admin_notes = ? 
                WHERE id = ?
            ");
            $stmt->execute([$status, $admin_notes, $id]);
            
            if ($status === 'completed') {
                $stmt = $conn->prepare("UPDATE transcript_requests SET completed_date = NOW() WHERE id = ?");
                $stmt->execute([$id]);
            }
            
            logActivity(getCurrentUserId(), 'Updated transcript request', 'transcript_requests', $id);
            flashMessage('success', 'Transcript request updated!');
            redirect('transcripts.php');
        }
    } catch(PDOException $e) {
        flashMessage('danger', 'Error: ' . $e->getMessage());
    }
}

// Get all transcript requests
$stmt = $conn->query("
    SELECT tr.*, a.first_name, a.last_name, a.student_id 
    FROM transcript_requests tr 
    JOIN alumni a ON tr.alumni_id = a.id 
    ORDER BY tr.request_date DESC
");
$transcripts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Transcripts - <?php echo SITE_NAME; ?></title>
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
                    <a class="nav-link active" href="transcripts.php"><i class="fas fa-file-alt me-2"></i> Transcripts</a>
                    <a class="nav-link" href="tracking.php"><i class="fas fa-chart-line me-2"></i> Tracking</a>
                    <a class="nav-link" href="placements.php"><i class="fas fa-briefcase me-2"></i> Placements</a>
                    <a class="nav-link" href="events.php"><i class="fas fa-calendar me-2"></i> Events</a>
                    <a class="nav-link" href="reunions.php"><i class="fas fa-users me-2"></i> Reunions</a>
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
                
                <h2 class="mb-4">Manage Transcript Requests</h2>
                
                <div class="card">
                    <div class="card-body">
                        <?php if ($transcripts): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Alumni</th>
                                            <th>Student ID</th>
                                            <th>Date</th>
                                            <th>Purpose</th>
                                            <th>Delivery</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transcripts as $transcript): ?>
                                            <tr>
                                                <td>#<?php echo str_pad($transcript['id'], 5, '0', STR_PAD_LEFT); ?></td>
                                                <td><?php echo htmlspecialchars($transcript['first_name'] . ' ' . $transcript['last_name']); ?></td>
                                                <td><?php echo htmlspecialchars($transcript['student_id']); ?></td>
                                                <td><?php echo formatDate($transcript['request_date']); ?></td>
                                                <td><?php echo htmlspecialchars(substr($transcript['purpose'], 0, 30)) . '...'; ?></td>
                                                <td><?php echo ucfirst($transcript['delivery_method']); ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $transcript['status'] === 'completed' ? 'success' : ($transcript['status'] === 'pending' ? 'warning' : 'info'); ?>">
                                                        <?php echo ucfirst($transcript['status']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $transcript['id']; ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No transcript requests found.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Update Modals -->
    <?php foreach ($transcripts as $transcript): ?>
        <div class="modal fade" id="updateModal<?php echo $transcript['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Request #<?php echo str_pad($transcript['id'], 5, '0', STR_PAD_LEFT); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="<?php echo $transcript['id']; ?>">
                            <p><strong>Alumni:</strong> <?php echo htmlspecialchars($transcript['first_name'] . ' ' . $transcript['last_name']); ?></p>
                            <p><strong>Purpose:</strong><br><?php echo nl2br(htmlspecialchars($transcript['purpose'])); ?></p>
                            <p><strong>Delivery Method:</strong> <?php echo ucfirst($transcript['delivery_method']); ?></p>
                            <?php if ($transcript['delivery_address']): ?>
                                <p><strong>Delivery Address:</strong><br><?php echo nl2br(htmlspecialchars($transcript['delivery_address'])); ?></p>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="pending" <?php echo $transcript['status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
                                    <option value="processing" <?php echo $transcript['status'] === 'processing' ? 'selected' : ''; ?>>Processing</option>
                                    <option value="completed" <?php echo $transcript['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
                                    <option value="rejected" <?php echo $transcript['status'] === 'rejected' ? 'selected' : ''; ?>>Rejected</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Admin Notes</label>
                                <textarea class="form-control" name="admin_notes" rows="3"><?php echo htmlspecialchars($transcript['admin_notes'] ?? ''); ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
