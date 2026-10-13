<?php
require_once 'config.php';
requireLogin();
requireVerification();

$conn = getDBConnection();
$alumni_id = getCurrentAlumniId();

// Handle donation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'donate') {
    try {
        $campaign_id = $_POST['campaign_id'];
        $amount = $_POST['amount'];
        $payment_method = $_POST['payment_method'];
        $is_anonymous = isset($_POST['is_anonymous']) ? 1 : 0;
        $notes = sanitizeInput($_POST['notes']);
        
        $stmt = $conn->prepare("
            INSERT INTO donations (campaign_id, alumni_id, amount, payment_method, is_anonymous, notes) 
            VALUES (?, ?, ?, ?, ?, ?)
        ");
        $stmt->execute([$campaign_id, $alumni_id, $amount, $payment_method, $is_anonymous, $notes]);
        
        // Update campaign current amount
        $stmt = $conn->prepare("UPDATE donor_campaigns SET current_amount = current_amount + ? WHERE id = ?");
        $stmt->execute([$amount, $campaign_id]);
        
        logActivity(getCurrentUserId(), 'Made donation', 'donations', $conn->lastInsertId());
        flashMessage('success', 'Thank you for your generous donation!');
        redirect('donations.php');
    } catch(PDOException $e) {
        flashMessage('danger', 'Error processing donation: ' . $e->getMessage());
    }
}

// Get active campaigns
$stmt = $conn->prepare("
    SELECT dc.*, 
           (SELECT COUNT(*) FROM donations WHERE campaign_id = dc.id) as donor_count,
           (SELECT SUM(amount) FROM donations WHERE campaign_id = dc.id) as total_donated
    FROM donor_campaigns dc
    WHERE dc.is_active = TRUE AND dc.end_date >= CURDATE()
    ORDER BY dc.end_date ASC
");
$stmt->execute();
$campaigns = $stmt->fetchAll();

// Get my donations
$stmt = $conn->prepare("
    SELECT d.*, dc.campaign_name 
    FROM donations d 
    JOIN donor_campaigns dc ON d.campaign_id = dc.id 
    WHERE d.alumni_id = ? 
    ORDER BY d.donation_date DESC
");
$stmt->execute([$alumni_id]);
$my_donations = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations - <?php echo SITE_NAME; ?></title>
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
        .campaign-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .campaign-card:hover {
            transform: translateY(-5px);
        }
        .progress {
            height: 10px;
            border-radius: 5px;
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
                    <a class="nav-link active" href="donations.php"><i class="fas fa-heart me-2"></i> Donations</a>
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
                
                <h2 class="mb-4">Donor Campaigns</h2>
                
                <!-- My Donations -->
                <div class="card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-history me-2"></i>My Donation History</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($my_donations): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Campaign</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Method</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($my_donations as $donation): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($donation['campaign_name']); ?></td>
                                                <td><?php echo formatCurrency($donation['amount']); ?></td>
                                                <td><?php echo formatDate($donation['donation_date']); ?></td>
                                                <td><?php echo ucfirst($donation['payment_method']); ?></td>
                                                <td>
                                                    <?php if ($donation['is_anonymous']): ?>
                                                        <span class="badge bg-secondary">Anonymous</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-success">Public</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">You haven't made any donations yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Active Campaigns -->
                <h4 class="mb-3">Active Campaigns</h4>
                <div class="row">
                    <?php if ($campaigns): ?>
                        <?php foreach ($campaigns as $campaign): ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card campaign-card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($campaign['campaign_name']); ?></h5>
                                        <p class="card-text small text-muted mb-2">
                                            <span class="badge bg-info"><?php echo ucfirst($campaign['campaign_type']); ?></span>
                                        </p>
                                        <p class="card-text small">
                                            <?php echo htmlspecialchars(substr($campaign['description'], 0, 100)) . (strlen($campaign['description']) > 100 ? '...' : ''); ?>
                                        </p>
                                        <div class="mb-2">
                                            <div class="d-flex justify-content-between small mb-1">
                                                <span>Raised: <?php echo formatCurrency($campaign['current_amount']); ?></span>
                                                <span>Goal: <?php echo formatCurrency($campaign['goal_amount']); ?></span>
                                            </div>
                                            <?php 
                                            $progress = min(($campaign['current_amount'] / $campaign['goal_amount']) * 100, 100);
                                            ?>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" style="width: <?php echo $progress; ?>%"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <small class="text-muted">
                                                <i class="fas fa-users me-1"></i><?php echo $campaign['donor_count']; ?> donors
                                            </small>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar me-1"></i>Ends: <?php echo formatDate($campaign['end_date']); ?>
                                            </small>
                                        </div>
                                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#donateModal<?php echo $campaign['id']; ?>">
                                            <i class="fas fa-heart me-2"></i>Donate Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No active campaigns at the moment.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Donation Modals -->
    <?php foreach ($campaigns as $campaign): ?>
        <div class="modal fade" id="donateModal<?php echo $campaign['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Make a Donation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <input type="hidden" name="action" value="donate">
                            <input type="hidden" name="campaign_id" value="<?php echo $campaign['id']; ?>">
                            <h6><?php echo htmlspecialchars($campaign['campaign_name']); ?></h6>
                            <p class="text-muted small mb-3">
                                Goal: <?php echo formatCurrency($campaign['goal_amount']); ?><br>
                                Raised so far: <?php echo formatCurrency($campaign['current_amount']); ?>
                            </p>
                            <div class="mb-3">
                                <label class="form-label">Amount ($)</label>
                                <input type="number" step="0.01" min="1" class="form-control" name="amount" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Payment Method</label>
                                <select class="form-select" name="payment_method" required>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="bank_transfer">Bank Transfer</option>
                                    <option value="check">Check</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_anonymous" name="is_anonymous">
                                <label class="form-check-label" for="is_anonymous">Make donation anonymous</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes (Optional)</label>
                                <textarea class="form-control" name="notes" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Donate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
