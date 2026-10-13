<?php
require_once 'config.php';
requireLogin();
requireVerification();

$conn = getDBConnection();
$alumni_id = getCurrentAlumniId();

// Get alumni data
$stmt = $conn->prepare("SELECT * FROM alumni WHERE id = ?");
$stmt->execute([$alumni_id]);
$alumni = $stmt->fetch();

// If no alumni record found (admin user without alumni profile), redirect to admin dashboard
if (!$alumni && isAdmin()) {
    redirect('admin/dashboard.php');
} elseif (!$alumni) {
    // Alumni without profile - redirect to complete profile
    redirect('profile.php');
}

// Get recent activity
$stmt = $conn->prepare("
    SELECT action, created_at 
    FROM activity_log 
    WHERE user_id = ? 
    ORDER BY created_at DESC 
    LIMIT 5
");
$stmt->execute([getCurrentUserId()]);
$recent_activity = $stmt->fetchAll();

// Get upcoming events
$stmt = $conn->prepare("
    SELECT * FROM events 
    WHERE event_date >= CURDATE() AND is_active = TRUE 
    ORDER BY event_date ASC 
    LIMIT 3
");
$stmt->execute();
$upcoming_events = $stmt->fetchAll();

// Get transcript requests
$stmt = $conn->prepare("
    SELECT * FROM transcript_requests 
    WHERE alumni_id = ? 
    ORDER BY request_date DESC 
    LIMIT 3
");
$stmt->execute([$alumni_id]);
$transcript_requests = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo SITE_NAME; ?></title>
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
        .stat-card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
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
                    <a class="nav-link active" href="dashboard.php"><i class="fas fa-home me-2"></i> Dashboard</a>
                    <a class="nav-link" href="profile.php"><i class="fas fa-user me-2"></i> My Profile</a>
                    <a class="nav-link" href="transcripts.php"><i class="fas fa-file-alt me-2"></i> Transcripts</a>
                    <a class="nav-link" href="tracking.php"><i class="fas fa-chart-line me-2"></i> Graduate Tracking</a>
                    <a class="nav-link" href="placements.php"><i class="fas fa-briefcase me-2"></i> Job Placements</a>
                    <a class="nav-link" href="events.php"><i class="fas fa-calendar me-2"></i> Events</a>
                    <a class="nav-link" href="reunions.php"><i class="fas fa-users me-2"></i> Reunions</a>
                    <a class="nav-link" href="donations.php"><i class="fas fa-heart me-2"></i> Donations</a>
                    <a class="nav-link" href="certificates.php"><i class="fas fa-certificate me-2"></i> Certificates</a>
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
                    <h2>Welcome, <?php echo htmlspecialchars($alumni['first_name']); ?>!</h2>
                    <span class="badge bg-primary">Alumni ID: <?php echo htmlspecialchars($alumni['student_id']); ?></span>
                </div>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-primary text-white me-3">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0"><?php echo count($upcoming_events); ?></h5>
                                    <small class="text-muted">Upcoming Events</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-success text-white me-3">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0"><?php echo count($transcript_requests); ?></h5>
                                    <small class="text-muted">Transcript Requests</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-warning text-white me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Batch <?php echo htmlspecialchars($alumni['batch'] ?? 'N/A'); ?></h5>
                                    <small class="text-muted">Your Batch</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-info text-white me-3">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0"><?php echo htmlspecialchars($alumni['graduation_year'] ?? 'N/A'); ?></h5>
                                    <small class="text-muted">Graduation Year</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Upcoming Events -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-calendar me-2"></i>Upcoming Events</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($upcoming_events): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Event</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($upcoming_events as $event): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($event['title']); ?></td>
                                                <td><?php echo formatDate($event['event_date']); ?></td>
                                                <td><?php echo htmlspecialchars($event['location']); ?></td>
                                                <td>
                                                    <a href="events.php?action=register&id=<?php echo $event['id']; ?>" class="btn btn-sm btn-primary">Register</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">No upcoming events at the moment.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-history me-2"></i>Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($recent_activity): ?>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($recent_activity as $activity): ?>
                                    <li class="list-group-item">
                                        <i class="fas fa-circle text-primary me-2" style="font-size: 8px;"></i>
                                        <?php echo htmlspecialchars($activity['action']); ?>
                                        <small class="text-muted float-end"><?php echo formatDate($activity['created_at'], 'M d, Y H:i'); ?></small>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p class="text-muted">No recent activity.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-bolt me-2"></i>Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="transcripts.php?action=request" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-file-alt me-2"></i>Request Transcript
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="tracking.php?action=add" class="btn btn-outline-success w-100">
                                    <i class="fas fa-chart-line me-2"></i>Update Status
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="placements.php?action=add" class="btn btn-outline-info w-100">
                                    <i class="fas fa-briefcase me-2"></i>Log Job
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="profile.php" class="btn btn-outline-warning w-100">
                                    <i class="fas fa-user me-2"></i>Edit Profile
                                </a>
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
