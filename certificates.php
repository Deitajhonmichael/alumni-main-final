<?php
require_once 'config.php';
requireLogin();
requireVerification();

$conn = getDBConnection();
$alumni_id = getCurrentAlumniId();

// Check if alumni record exists
if (!$alumni_id) {
    flashMessage('danger', 'Please complete your profile first before requesting certificates.');
    redirect('profile.php');
}

// Handle certificate request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'request') {
    try {
        $certificate_type = $_POST['certificate_type'];
        $reason = sanitizeInput($_POST['reason']);
        
        $stmt = $conn->prepare("
            INSERT INTO certificate_requests (alumni_id, certificate_type, reason) 
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$alumni_id, $certificate_type, $reason]);
        
        logActivity(getCurrentUserId(), 'Requested certificate reprint', 'certificate_requests', $conn->lastInsertId());
        flashMessage('success', 'Certificate request submitted successfully!');
        redirect('certificates.php');
    } catch(PDOException $e) {
        flashMessage('danger', 'Error submitting request: ' . $e->getMessage());
    }
}

// Get certificate requests
$stmt = $conn->prepare("
    SELECT * FROM certificate_requests 
    WHERE alumni_id = ? 
    ORDER BY request_date DESC
");
$stmt->execute([$alumni_id]);
$certificates = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates - <?php echo SITE_NAME; ?></title>
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
        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
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
                    <a class="nav-link active" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
                    <a class="nav-link" href="newsletter.php"><i class="fas fa-envelope me-2"></i> Newsletter</a>
                    <a class="nav-link" href="feedback.php"><i class="fas fa-comment me-2"></i> Feedback</a>
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
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Certificate Reprint Requests</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal">
                        <i class="fas fa-plus me-2"></i>New Request
                    </button>
                </div>
                
                <!-- Certificate Requests Table -->
                <div class="card">
                    <div class="card-body">
                        <?php if ($certificates): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Request ID</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Fee</th>
                                            <th>Payment Status</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($certificates as $cert): ?>
                                            <tr>
                                                <td>#<?php echo str_pad($cert['id'], 5, '0', STR_PAD_LEFT); ?></td>
                                                <td>
                                                    <span class="badge bg-info"><?php echo ucfirst($cert['certificate_type']); ?></span>
                                                </td>
                                                <td><?php echo formatDate($cert['request_date']); ?></td>
                                                <td><?php echo $cert['fee'] > 0 ? formatCurrency($cert['fee']) : 'Free'; ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $cert['payment_status'] === 'paid' ? 'success' : 'warning'; ?>">
                                                        <?php echo ucfirst($cert['payment_status']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php
                                                    $statusClass = [
                                                        'pending' => 'warning',
                                                        'processing' => 'info',
                                                        'completed' => 'success',
                                                        'rejected' => 'danger'
                                                    ];
                                                    ?>
                                                    <span class="status-badge bg-<?php echo $statusClass[$cert['status']]; ?>">
                                                        <?php echo ucfirst($cert['status']); ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $cert['id']; ?>">
                                                        <i class="fas fa-eye"></i>
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
                                <p class="text-muted">No certificate requests yet. Click "New Request" to submit one.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Request Modal -->
    <div class="modal fade" id="requestModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Certificate Reprint</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="request">
                        <div class="mb-3">
                            <label class="form-label">Certificate Type</label>
                            <select class="form-select" name="certificate_type" required>
                                <option value="degree">Degree Certificate</option>
                                <option value="transcript">Official Transcript</option>
                                <option value="completion">Completion Certificate</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reason for Reprint</label>
                            <textarea class="form-control" name="reason" rows="3" required placeholder="Explain why you need a reprint..."></textarea>
                        </div>
                        <div class="alert alert-info small">
                            <i class="fas fa-info-circle me-2"></i>
                            Note: A processing fee may apply for certificate reprints. You will be notified if payment is required.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- View Modals -->
    <?php foreach ($certificates as $cert): ?>
        <div class="modal fade" id="viewModal<?php echo $cert['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Request #<?php echo str_pad($cert['id'], 5, '0', STR_PAD_LEFT); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Type:</strong> <?php echo ucfirst($cert['certificate_type']); ?></p>
                        <p><strong>Reason:</strong><br><?php echo nl2br(htmlspecialchars($cert['reason'])); ?></p>
                        <p><strong>Fee:</strong> <?php echo $cert['fee'] > 0 ? formatCurrency($cert['fee']) : 'Free'; ?></p>
                        <p><strong>Payment Status:</strong> <?php echo ucfirst($cert['payment_status']); ?></p>
                        <p><strong>Status:</strong> <?php echo ucfirst($cert['status']); ?></p>
                        <p><strong>Requested:</strong> <?php echo formatDate($cert['request_date'], 'F j, Y g:i A'); ?></p>
                        <?php if (!empty($cert['certificate_file'])): ?>
                            <div class="mt-3">
                                <strong>Certificate Document:</strong><br>
                                <a href="<?php echo htmlspecialchars($cert['certificate_file']); ?>" target="_blank" class="btn btn-sm btn-primary mt-2">
                                    <i class="fas fa-download me-1"></i>Download Certificate
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($cert['admin_notes']): ?>
                            <p><strong>Admin Notes:</strong><br><?php echo nl2br(htmlspecialchars($cert['admin_notes'])); ?></p>
                        <?php endif; ?>
                        <?php if ($cert['completed_date']): ?>
                            <p><strong>Completed:</strong> <?php echo formatDate($cert['completed_date'], 'F j, Y'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
