<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Get statistics
$stats = [
    'total_alumni' => $conn->query("SELECT COUNT(*) FROM alumni")->fetchColumn(),
    'active_events' => $conn->query("SELECT COUNT(*) FROM events WHERE is_active = TRUE AND event_date >= CURDATE()")->fetchColumn(),
    'pending_transcripts' => $conn->query("SELECT COUNT(*) FROM transcript_requests WHERE status = 'pending'")->fetchColumn(),
    'pending_certificates' => $conn->query("SELECT COUNT(*) FROM certificate_requests WHERE status = 'pending'")->fetchColumn(),
    'total_donations' => $conn->query("SELECT COALESCE(SUM(amount), 0) FROM donations")->fetchColumn(),
    'active_campaigns' => $conn->query("SELECT COUNT(*) FROM donor_campaigns WHERE is_active = TRUE")->fetchColumn(),
    'total_reunions' => $conn->query("SELECT COUNT(*) FROM batch_reunions WHERE status != 'cancelled'")->fetchColumn(),
    'pending_feedback' => $conn->query("SELECT COUNT(*) FROM feedback WHERE status = 'new'")->fetchColumn(),
];

// Get recent activity
$stmt = $conn->query("
    SELECT al.*, u.username 
    FROM activity_log al 
    LEFT JOIN users u ON al.user_id = u.id 
    ORDER BY al.created_at DESC 
    LIMIT 10
");
$recent_activity = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - <?php echo SITE_NAME; ?></title>
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
        .stat-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
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
                    <a class="nav-link active" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
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
                
                <h2 class="mb-4">Admin Dashboard</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-primary text-white me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['total_alumni']; ?></h3>
                                    <small class="text-muted">Total Alumni</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-success text-white me-3">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['active_events']; ?></h3>
                                    <small class="text-muted">Active Events</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-warning text-white me-3">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['pending_transcripts']; ?></h3>
                                    <small class="text-muted">Pending Transcripts</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-danger text-white me-3">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['pending_certificates']; ?></h3>
                                    <small class="text-muted">Pending Certificates</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-info text-white me-3">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo formatCurrency($stats['total_donations']); ?></h3>
                                    <small class="text-muted">Total Donations</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-secondary text-white me-3">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['active_campaigns']; ?></h3>
                                    <small class="text-muted">Active Campaigns</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-dark text-white me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['total_reunions']; ?></h3>
                                    <small class="text-muted">Total Reunions</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-purple text-white me-3" style="background-color: #6f42c1;">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0"><?php echo $stats['pending_feedback']; ?></h3>
                                    <small class="text-muted">Pending Feedback</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-history me-2"></i>Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($recent_activity): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Action</th>
                                            <th>Table</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($recent_activity as $activity): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($activity['username'] ?? 'System'); ?></td>
                                                <td><?php echo htmlspecialchars($activity['action']); ?></td>
                                                <td><?php echo htmlspecialchars($activity['table_name'] ?? '-'); ?></td>
                                                <td><?php echo formatDate($activity['created_at'], 'M d, Y H:i'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">No recent activity.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
