<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Handle certificate actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['action']) && $_POST['action'] === 'update') {
            $id = $_POST['id'];
            $status = $_POST['status'];
            $admin_notes = sanitizeInput($_POST['admin_notes']);
            $fee = $_POST['fee'];
            $payment_status = $_POST['payment_status'];
            
            // Handle certificate file upload
            $certificate_file = null;
            if (isset($_FILES['certificate_file']) && $_FILES['certificate_file']['error'] === UPLOAD_ERR_OK) {
                $uploaded = uploadFile($_FILES['certificate_file'], '../uploads/certificates/');
                if ($uploaded) {
                    $certificate_file = '../uploads/' . $uploaded;
                }
            }
            
            // Build update query
            if ($certificate_file) {
                $stmt = $conn->prepare("
                    UPDATE certificate_requests SET status = ?, admin_notes = ?, fee = ?, payment_status = ?, certificate_file = ?
                    WHERE id = ?
                ");
                $stmt->execute([$status, $admin_notes, $fee, $payment_status, $certificate_file, $id]);
            } else {
                $stmt = $conn->prepare("
                    UPDATE certificate_requests SET status = ?, admin_notes = ?, fee = ?, payment_status = ?
                    WHERE id = ?
                ");
                $stmt->execute([$status, $admin_notes, $fee, $payment_status, $id]);
            }
            
            if ($status === 'completed') {
                $stmt = $conn->prepare("UPDATE certificate_requests SET completed_date = NOW() WHERE id = ?");
                $stmt->execute([$id]);
            }
            
            logActivity(getCurrentUserId(), 'Updated certificate request', 'certificate_requests', $id);
            flashMessage('success', 'Certificate request updated!');
            redirect('certificates.php');
        }
    } catch(PDOException $e) {
        flashMessage('danger', 'Error: ' . $e->getMessage());
    }
}

// Get all certificate requests
$stmt = $conn->query("
    SELECT cr.*, a.first_name, a.last_name, a.student_id 
    FROM certificate_requests cr 
    JOIN alumni a ON cr.alumni_id = a.id 
    ORDER BY cr.request_date DESC
");
$certificates = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Certificates - <?php echo SITE_NAME; ?></title>
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
                    <a class="nav-link active" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
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
                
                <h2 class="mb-4">Manage Certificate Requests</h2>
                
                <div class="card">
                    <div class="card-body">
                        <?php if ($certificates): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Alumni</th>
                                            <th>Student ID</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Fee</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($certificates as $cert): ?>
                                            <tr>
                                                <td>#<?php echo str_pad($cert['id'], 5, '0', STR_PAD_LEFT); ?></td>
                                                <td><?php echo htmlspecialchars($cert['first_name'] . ' ' . $cert['last_name']); ?></td>
                                                <td><?php echo htmlspecialchars($cert['student_id']); ?></td>
                                                <td><?php echo ucfirst($cert['certificate_type']); ?></td>
                                                <td><?php echo formatDate($cert['request_date']); ?></td>
                                                <td><?php echo $cert['fee'] > 0 ? formatCurrency($cert['fee']) : 'Free'; ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $cert['payment_status'] === 'paid' ? 'success' : 'warning'; ?>">
                                                        <?php echo ucfirst($cert['payment_status']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-<?php echo $cert['status'] === 'completed' ? 'success' : ($cert['status'] === 'pending' ? 'warning' : 'info'); ?>">
                                                        <?php echo ucfirst($cert['status']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $cert['id']; ?>">
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
                                <i class="fas fa-certificate fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No certificate requests found.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Update Modals -->
    <?php foreach ($certificates as $cert): ?>
        <div class="modal fade" id="updateModal<?php echo $cert['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Request #<?php echo str_pad($cert['id'], 5, '0', STR_PAD_LEFT); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="<?php echo $cert['id']; ?>">
                            <p><strong>Alumni:</strong> <?php echo htmlspecialchars($cert['first_name'] . ' ' . $cert['last_name']); ?></p>
                            <p><strong>Type:</strong> <?php echo ucfirst($cert['certificate_type']); ?></p>
                            <p><strong>Reason:</strong><br><?php echo nl2br(htmlspecialchars($cert['reason'])); ?></p>
                            <?php if (!empty($cert['certificate_file'])): ?>
                                <div class="mb-3">
                                    <label class="form-label">Current Certificate</label>
                                    <a href="<?php echo htmlspecialchars($cert['certificate_file']); ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-download me-1"></i>Download Certificate
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label class="form-label">Upload Certificate (PDF/Image)</label>
                                <input type="file" class="form-control" name="certificate_file" accept=".pdf,.jpg,.jpeg,.png">
                                <small class="text-muted">Upload the completed certificate document</small>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Fee ($)</label>
                                    <input type="number" step="0.01" class="form-control" name="fee" value="<?php echo htmlspecialchars($cert['fee']); ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Payment Status</label>
                                    <select class="form-select" name="payment_status">
                                        <option value="pending" <?php echo $cert['payment_status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
                                        <option value="paid" <?php echo $cert['payment_status'] === 'paid' ? 'selected' : ''; ?>>Paid</option>
                                        <option value="waived" <?php echo $cert['payment_status'] === 'waived' ? 'selected' : ''; ?>>Waived</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="pending" <?php echo $cert['status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
                                    <option value="processing" <?php echo $cert['status'] === 'processing' ? 'selected' : ''; ?>>Processing</option>
                                    <option value="completed" <?php echo $cert['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
                                    <option value="rejected" <?php echo $cert['status'] === 'rejected' ? 'selected' : ''; ?>>Rejected</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Admin Notes</label>
                                <textarea class="form-control" name="admin_notes" rows="3"><?php echo htmlspecialchars($cert['admin_notes'] ?? ''); ?></textarea>
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
