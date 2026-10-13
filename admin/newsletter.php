<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Handle newsletter actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['action']) && $_POST['action'] === 'send') {
            $title = sanitizeInput($_POST['title']);
            $subject = sanitizeInput($_POST['subject']);
            $content = $_POST['content'];
            
            // Count subscribed alumni
            $stmt = $conn->query("SELECT COUNT(*) FROM newsletter_subscriptions WHERE is_subscribed = 1");
            $recipient_count = $stmt->fetchColumn();
            
            $stmt = $conn->prepare("
                INSERT INTO newsletters (title, subject, content, sent_by, recipient_count, status) 
                VALUES (?, ?, ?, ?, ?, 'sent')
            ");
            $stmt->execute([$title, $subject, $content, getCurrentUserId(), $recipient_count]);
            
            logActivity(getCurrentUserId(), 'Sent newsletter', 'newsletters', $conn->lastInsertId());
            flashMessage('success', 'Newsletter sent successfully to ' . $recipient_count . ' subscribers!');
            redirect('newsletter.php');
        }
    } catch(PDOException $e) {
        flashMessage('danger', 'Error: ' . $e->getMessage());
    }
}

// Get sent newsletters
$stmt = $conn->query("
    SELECT n.*, u.username 
    FROM newsletters n 
    LEFT JOIN users u ON n.sent_by = u.id 
    ORDER BY n.sent_date DESC 
    LIMIT 20
");
$newsletters = $stmt->fetchAll();

// Get subscription stats
$subscribed_count = $conn->query("SELECT COUNT(*) FROM newsletter_subscriptions WHERE is_subscribed = 1")->fetchColumn();
$total_alumni = $conn->query("SELECT COUNT(*) FROM alumni")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter - <?php echo SITE_NAME; ?></title>
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
                    <a class="nav-link active" href="newsletter.php"><i class="fas fa-envelope me-2"></i> Newsletter</a>
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
                    <h2>Newsletter Management</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendModal">
                        <i class="fas fa-paper-plane me-2"></i>Send Newsletter
                    </button>
                </div>
                
                <!-- Subscription Stats -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5><i class="fas fa-users me-2"></i>Subscribers</h5>
                                <h3><?php echo $subscribed_count; ?> / <?php echo $total_alumni; ?></h3>
                                <p class="text-muted"><?php echo round(($subscribed_count / $total_alumni) * 100, 1); ?>% subscription rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5><i class="fas fa-envelope me-2"></i>Total Sent</h5>
                                <h3><?php echo count($newsletters); ?></h3>
                                <p class="text-muted">Newsletters sent to date</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sent Newsletters -->
                <div class="card">
                    <div class="card-body">
                        <?php if ($newsletters): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Subject</th>
                                            <th>Sent By</th>
                                            <th>Recipients</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($newsletters as $newsletter): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($newsletter['title']); ?></td>
                                                <td><?php echo htmlspecialchars($newsletter['subject']); ?></td>
                                                <td><?php echo htmlspecialchars($newsletter['username'] ?? 'System'); ?></td>
                                                <td><?php echo $newsletter['recipient_count']; ?></td>
                                                <td><?php echo formatDate($newsletter['sent_date']); ?></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $newsletter['id']; ?>">
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
                                <i class="fas fa-envelope fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No newsletters sent yet.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Send Modal -->
    <div class="modal fade" id="sendModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Newsletter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="send">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Subject</label>
                            <input type="text" class="form-control" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content (HTML allowed)</label>
                            <textarea class="form-control" name="content" rows="10" required></textarea>
                        </div>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            This newsletter will be sent to <?php echo $subscribed_count; ?> subscribed alumni.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send Newsletter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- View Modals -->
    <?php foreach ($newsletters as $newsletter): ?>
        <div class="modal fade" id="viewModal<?php echo $newsletter['id']; ?>" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo htmlspecialchars($newsletter['title']); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted small mb-3">
                            <strong>Subject:</strong> <?php echo htmlspecialchars($newsletter['subject']); ?><br>
                            <strong>Sent:</strong> <?php echo formatDate($newsletter['sent_date'], 'F j, Y g:i A'); ?><br>
                            <strong>Recipients:</strong> <?php echo $newsletter['recipient_count']; ?>
                        </p>
                        <div class="border p-3">
                            <?php echo $newsletter['content']; ?>
                        </div>
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
