<?php
require_once 'config.php';

requireLogin();
requireVerification();

$error = '';
$success = '';
$user_id = getCurrentUserId();
$current_email = $_SESSION['email'] ?? '';

// Handle email change
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['change_email'])) {
        $new_email = sanitizeInput($_POST['new_email']);
        $confirm_email = sanitizeInput($_POST['confirm_email']);
        
        if ($new_email !== $confirm_email) {
            $error = 'Email addresses do not match';
        } elseif ($new_email === $current_email) {
            $error = 'New email cannot be the same as current email';
        } elseif (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Invalid email format';
        } else {
            try {
                $conn = getDBConnection();
                
                // Check if email already exists
                $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
                $stmt->execute([$new_email, $user_id]);
                if ($stmt->fetch()) {
                    $error = 'Email already exists in the system';
                } else {
                    // Generate verification code for new email
                    $code = generateVerificationCode($user_id);
                    if ($code) {
                        // Send verification code to new email
                        $emailSent = sendVerificationEmail($new_email, $code);
                        // Store new email in session temporarily
                        $_SESSION['pending_email'] = $new_email;
                        $_SESSION['pending_email_code'] = $code;
                        
                        logActivity($user_id, 'User requested email change to: ' . $new_email);
                        
                        if ($emailSent) {
                            flashMessage('info', 'Verification code sent to new email. Please verify to complete the change.');
                        } else {
                            // TEMPORARY: Show code if email fails
                            flashMessage('info', "Email sending failed. Your verification code is: <strong>$code</strong> (Please configure php.ini - see PHPINI_CONFIG.md)");
                        }
                        redirect('verify_email_change.php');
                    } else {
                        $error = 'Failed to generate verification code. Please try again.';
                    }
                }
            } catch(PDOException $e) {
                $error = 'Database error: ' . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email - <?php echo SITE_NAME; ?></title>
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
        .form-control {
            border-radius: 8px;
            padding: 12px;
        }
        .btn-change {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
        }
        .btn-change:hover {
            opacity: 0.9;
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
                    <a class="nav-link active" href="profile.php"><i class="fas fa-user me-2"></i> My Profile</a>
                    <a class="nav-link" href="change_email.php"><i class="fas fa-envelope me-2"></i> Change Email</a>
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
                
                <h2 class="mb-4">Change Email Address</h2>
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="fas fa-envelope me-2"></i>Email Settings</h5>
                            </div>
                            <div class="card-body">
                                <?php if ($error): ?>
                                    <div class="alert alert-danger"><?php echo $error; ?></div>
                                <?php endif; ?>
                                
                                <?php if ($success): ?>
                                    <div class="alert alert-success"><?php echo $success; ?></div>
                                <?php endif; ?>
                                
                                <div class="mb-4">
                                    <label class="form-label">Current Email</label>
                                    <input type="email" class="form-control" value="<?php echo htmlspecialchars($current_email); ?>" disabled>
                                    <small class="text-muted">Your current email address</small>
                                </div>
                                
                                <form method="POST" action="">
                                    <div class="mb-3">
                                        <label class="form-label">New Email Address</label>
                                        <input type="email" class="form-control" name="new_email" required>
                                        <small class="text-muted">Enter your new email address</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Confirm New Email</label>
                                        <input type="email" class="form-control" name="confirm_email" required>
                                        <small class="text-muted">Re-enter your new email address</small>
                                    </div>
                                    
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        A verification code will be sent to your new email address. You'll need to enter this code to complete the email change.
                                    </div>
                                    
                                    <button type="submit" name="change_email" class="btn btn-primary btn-change">
                                        <i class="fas fa-paper-plane me-2"></i>Send Verification Code
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="fas fa-shield-alt me-2"></i>Security Tips</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <i class="fas fa-check text-success me-2"></i>
                                        Use a secure email provider
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-check text-success me-2"></i>
                                        Enable 2-factor authentication
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-check text-success me-2"></i>
                                        Keep your email password secure
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-check text-success me-2"></i>
                                        Check spam folder for verification emails
                                    </li>
                                    <li>
                                        <i class="fas fa-check text-success me-2"></i>
                                        Verify code within 10 minutes
                                    </li>
                                </ul>
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
