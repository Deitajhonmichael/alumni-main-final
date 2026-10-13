<?php
require_once '../config.php';
requireLogin();
requireAdmin();
requireVerification();

$conn = getDBConnection();

// Handle campaign actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['action']) && $_POST['action'] === 'add') {
            $campaign_name = sanitizeInput($_POST['campaign_name']);
            $description = sanitizeInput($_POST['description']);
            $goal_amount = $_POST['goal_amount'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $campaign_type = $_POST['campaign_type'];
            
            $stmt = $conn->prepare("
                INSERT INTO donor_campaigns (campaign_name, description, goal_amount, start_date, end_date, campaign_type) 
                VALUES (?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([$campaign_name, $description, $goal_amount, $start_date, $end_date, $campaign_type]);
            
            logActivity(getCurrentUserId(), 'Added donor campaign', 'donor_campaigns', $conn->lastInsertId());
            flashMessage('success', 'Campaign added successfully!');
            redirect('campaigns.php');
        }
        
        if (isset($_POST['action']) && $_POST['action'] === 'edit') {
            $id = $_POST['id'];
            $campaign_name = sanitizeInput($_POST['campaign_name']);
            $description = sanitizeInput($_POST['description']);
            $goal_amount = $_POST['goal_amount'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $campaign_type = $_POST['campaign_type'];
            $is_active = isset($_POST['is_active']) ? 1 : 0;
            
            $stmt = $conn->prepare("
                UPDATE donor_campaigns SET 
                    campaign_name = ?, description = ?, goal_amount = ?, 
                    start_date = ?, end_date = ?, campaign_type = ?, is_active = ?
                WHERE id = ?
            ");
            $stmt->execute([$campaign_name, $description, $goal_amount, $start_date, $end_date, $campaign_type, $is_active, $id]);
            
            logActivity(getCurrentUserId(), 'Updated donor campaign', 'donor_campaigns', $id);
            flashMessage('success', 'Campaign updated successfully!');
            redirect('campaigns.php');
        }
        
        if (isset($_POST['action']) && $_POST['action'] === 'delete') {
            $id = $_POST['id'];
            $stmt = $conn->prepare("DELETE FROM donor_campaigns WHERE id = ?");
            $stmt->execute([$id]);
            
            logActivity(getCurrentUserId(), 'Deleted donor campaign', 'donor_campaigns', $id);
            flashMessage('success', 'Campaign deleted successfully!');
            redirect('campaigns.php');
        }
    } catch(PDOException $e) {
        flashMessage('danger', 'Error: ' . $e->getMessage());
    }
}

// Get all campaigns
$stmt = $conn->query("
    SELECT dc.*, 
           (SELECT COUNT(*) FROM donations WHERE campaign_id = dc.id) as donor_count,
           (SELECT COALESCE(SUM(amount), 0) FROM donations WHERE campaign_id = dc.id) as total_raised
    FROM donor_campaigns dc 
    ORDER BY dc.end_date DESC
");
$campaigns = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Campaigns - <?php echo SITE_NAME; ?></title>
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
                    <a class="nav-link active" href="campaigns.php"><i class="fas fa-heart me-2"></i> Campaigns</a>
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
                    <h2>Manage Donor Campaigns</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="fas fa-plus me-2"></i>Add Campaign
                    </button>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <?php if ($campaigns): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Campaign</th>
                                            <th>Type</th>
                                            <th>Goal</th>
                                            <th>Raised</th>
                                            <th>Progress</th>
                                            <th>Donors</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($campaigns as $campaign): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($campaign['campaign_name']); ?></td>
                                                <td><?php echo ucfirst($campaign['campaign_type']); ?></td>
                                                <td><?php echo formatCurrency($campaign['goal_amount']); ?></td>
                                                <td><?php echo formatCurrency($campaign['total_raised']); ?></td>
                                                <td>
                                                    <?php 
                                                    $progress = min(($campaign['total_raised'] / $campaign['goal_amount']) * 100, 100);
                                                    ?>
                                                    <div class="progress" style="width: 100px; height: 20px;">
                                                        <div class="progress-bar bg-success" style="width: <?php echo $progress; ?>%"><?php echo round($progress); ?>%</div>
                                                    </div>
                                                </td>
                                                <td><?php echo $campaign['donor_count']; ?></td>
                                                <td><?php echo formatDate($campaign['end_date']); ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $campaign['is_active'] ? 'success' : 'danger'; ?>">
                                                        <?php echo $campaign['is_active'] ? 'Active' : 'Inactive'; ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $campaign['id']; ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <form method="POST" action="" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                        <input type="hidden" name="action" value="delete">
                                                        <input type="hidden" name="id" value="<?php echo $campaign['id']; ?>">
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
                                <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No campaigns found.</p>
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
                    <h5 class="modal-title">Add Campaign</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add">
                        <div class="mb-3">
                            <label class="form-label">Campaign Name</label>
                            <input type="text" class="form-control" name="campaign_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Goal Amount ($)</label>
                            <input type="number" step="0.01" class="form-control" name="goal_amount" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Campaign Type</label>
                            <select class="form-select" name="campaign_type">
                                <option value="general">General</option>
                                <option value="scholarship">Scholarship</option>
                                <option value="infrastructure">Infrastructure</option>
                                <option value="research">Research</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Campaign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Modals -->
    <?php foreach ($campaigns as $campaign): ?>
        <div class="modal fade" id="editModal<?php echo $campaign['id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Campaign</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id" value="<?php echo $campaign['id']; ?>">
                            <div class="mb-3">
                                <label class="form-label">Campaign Name</label>
                                <input type="text" class="form-control" name="campaign_name" value="<?php echo htmlspecialchars($campaign['campaign_name']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3"><?php echo htmlspecialchars($campaign['description']); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Goal Amount ($)</label>
                                <input type="number" step="0.01" class="form-control" name="goal_amount" value="<?php echo htmlspecialchars($campaign['goal_amount']); ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" class="form-control" name="start_date" value="<?php echo htmlspecialchars($campaign['start_date']); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date" value="<?php echo htmlspecialchars($campaign['end_date']); ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Campaign Type</label>
                                <select class="form-select" name="campaign_type">
                                    <option value="general" <?php echo $campaign['campaign_type'] === 'general' ? 'selected' : ''; ?>>General</option>
                                    <option value="scholarship" <?php echo $campaign['campaign_type'] === 'scholarship' ? 'selected' : ''; ?>>Scholarship</option>
                                    <option value="infrastructure" <?php echo $campaign['campaign_type'] === 'infrastructure' ? 'selected' : ''; ?>>Infrastructure</option>
                                    <option value="research" <?php echo $campaign['campaign_type'] === 'research' ? 'selected' : ''; ?>>Research</option>
                                    <option value="other" <?php echo $campaign['campaign_type'] === 'other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" <?php echo $campaign['is_active'] ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="is_active">Active</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Campaign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
