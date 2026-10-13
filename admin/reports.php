<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Get report statistics
$stats = [
    'total_alumni' => $conn->query("SELECT COUNT(*) FROM alumni")->fetchColumn(),
    'active_alumni' => $conn->query("SELECT COUNT(*) FROM alumni WHERE is_active = TRUE")->fetchColumn(),
    'total_events' => $conn->query("SELECT COUNT(*) FROM events")->fetchColumn(),
    'total_reunions' => $conn->query("SELECT COUNT(*) FROM batch_reunions")->fetchColumn(),
    'total_donations' => $conn->query("SELECT COALESCE(SUM(amount), 0) FROM donations")->fetchColumn(),
    'total_campaigns' => $conn->query("SELECT COUNT(*) FROM donor_campaigns")->fetchColumn(),
    'employed_alumni' => $conn->query("SELECT COUNT(*) FROM graduate_tracking WHERE current_status = 'employed'")->fetchColumn(),
    'total_transcripts' => $conn->query("SELECT COUNT(*) FROM transcript_requests")->fetchColumn(),
];

// Get alumni by graduation year
$grad_years = $conn->query("
    SELECT graduation_year, COUNT(*) as count 
    FROM alumni 
    GROUP BY graduation_year 
    ORDER BY graduation_year DESC
")->fetchAll();

// Get alumni by batch
$batches = $conn->query("
    SELECT batch, COUNT(*) as count 
    FROM alumni 
    WHERE batch IS NOT NULL AND batch != ''
    GROUP BY batch 
    ORDER BY batch DESC
")->fetchAll();

// Get recent donations
$recent_donations = $conn->query("
    SELECT d.*, dc.campaign_name, a.first_name, a.last_name 
    FROM donations d 
    JOIN donor_campaigns dc ON d.campaign_id = dc.id 
    LEFT JOIN alumni a ON d.alumni_id = a.id 
    ORDER BY d.donation_date DESC 
    LIMIT 10
")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - <?php echo SITE_NAME; ?></title>
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
                    <a class="nav-link" href="surveys.php"><i class="fas fa-poll me-2"></i> Surveys</a>
                    <a class="nav-link" href="users.php"><i class="fas fa-user-cog me-2"></i> Users</a>
                    <a class="nav-link active" href="reports.php"><i class="fas fa-chart-bar me-2"></i> Reports</a>
                    <hr class="my-2 mx-3" style="border-color: rgba(255,255,255,0.3);">
                    <a class="nav-link" href="../dashboard.php"><i class="fas fa-arrow-left me-2"></i> Back to Alumni</a>
                    <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <h2 class="mb-4">Reports & Analytics</h2>
                
                <!-- Overview Stats -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card p-3">
                            <h6>Total Alumni</h6>
                            <h3><?php echo $stats['total_alumni']; ?></h3>
                            <small class="text-muted"><?php echo $stats['active_alumni']; ?> active</small>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card p-3">
                            <h6>Employed Alumni</h6>
                            <h3><?php echo $stats['employed_alumni']; ?></h3>
                            <small class="text-muted"><?php echo $stats['total_alumni'] > 0 ? round(($stats['employed_alumni'] / $stats['total_alumni']) * 100, 1) : 0; ?>% employment rate</small>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card p-3">
                            <h6>Total Donations</h6>
                            <h3><?php echo formatCurrency($stats['total_donations']); ?></h3>
                            <small class="text-muted"><?php echo $stats['total_campaigns']; ?> campaigns</small>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card p-3">
                            <h6>Transcript Requests</h6>
                            <h3><?php echo $stats['total_transcripts']; ?></h3>
                            <small class="text-muted"><?php echo $stats['total_events']; ?> events</small>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Alumni by Graduation Year -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Alumni by Graduation Year</h5>
                            </div>
                            <div class="card-body">
                                <?php if ($grad_years): ?>
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Count</th>
                                                <th>Bar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $max_count = max(array_column($grad_years, 'count'));
                                            foreach ($grad_years as $year): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($year['graduation_year']); ?></td>
                                                    <td><?php echo $year['count']; ?></td>
                                                    <td style="width: 50%;">
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-primary" style="width: <?php echo ($year['count'] / $max_count) * 100; ?>%"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p class="text-muted">No data available.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Alumni by Batch -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">Alumni by Batch</h5>
                            </div>
                            <div class="card-body">
                                <?php if ($batches): ?>
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Batch</th>
                                                <th>Count</th>
                                                <th>Bar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $max_count = max(array_column($batches, 'count'));
                                            foreach ($batches as $batch): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($batch['batch']); ?></td>
                                                    <td><?php echo $batch['count']; ?></td>
                                                    <td style="width: 50%;">
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-success" style="width: <?php echo ($batch['count'] / $max_count) * 100; ?>%"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <p class="text-muted">No data available.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Donations -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Recent Donations</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($recent_donations): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Donor</th>
                                            <th>Campaign</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Method</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($recent_donations as $donation): ?>
                                            <tr>
                                                <td>
                                                    <?php if ($donation['is_anonymous']): ?>
                                                        Anonymous
                                                    <?php else: ?>
                                                        <?php echo htmlspecialchars($donation['first_name'] . ' ' . $donation['last_name'] ?? $donation['donor_name']); ?>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo htmlspecialchars($donation['campaign_name']); ?></td>
                                                <td><?php echo formatCurrency($donation['amount']); ?></td>
                                                <td><?php echo formatDate($donation['donation_date']); ?></td>
                                                <td><?php echo ucfirst($donation['payment_method']); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">No donations recorded yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
