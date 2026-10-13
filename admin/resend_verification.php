<?php
require_once '../config.php';

// Redirect to login if not logged in
if (!isLoggedIn()) {
    redirect('../login.php');
}

// Redirect non-admin users
if (!isAdmin()) {
    redirect('../resend_verification.php');
}

// If already verified, redirect to admin dashboard
if (isVerified()) {
    flashMessage('info', 'Your admin email is already verified.');
    redirect('dashboard.php');
}

$error = '';
$success = '';
$user_id = getCurrentUserId();
$email = $_SESSION['email'] ?? '';

// Handle resend code
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['resend'])) {
    $code = generateVerificationCode($user_id);
    if ($code) {
        // Send verification code via email
        $emailSent = sendVerificationEmail($email, $code);
        if ($emailSent) {
            logActivity($user_id, 'Admin requested new verification code');
            $success = "A new verification code has been sent to your admin email: <strong>$email</strong>. Please check your inbox (and spam folder).";
        } else {
            // TEMPORARY: Display code for testing if email fails
            $success = "Email sending failed. Your new verification code is: <strong>$code</strong> (Please configure php.ini - see PHPINI_CONFIG.md)";
        }
    } else {
        $error = 'Failed to generate verification code. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resend Admin Verification - <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .resend-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 450px;
            width: 100%;
        }
        .resend-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .resend-header h2 {
            color: #333;
            font-weight: 700;
        }
        .admin-badge {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }
        .btn-resend {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
        }
        .btn-resend:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="resend-card">
        <div class="resend-header">
            <span class="admin-badge"><i class="fas fa-shield-alt me-1"></i>ADMIN ACCESS</span>
            <i class="fas fa-paper-plane fa-3x mb-3" style="color: #1e3c72;"></i>
            <h2>Resend Admin Verification</h2>
            <p>Didn't receive the code? We'll send another one.</p>
        </div>
        
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <div class="mb-4">
            <div class="card bg-light">
                <div class="card-body">
                    <p class="mb-0"><strong>Admin Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                </div>
            </div>
        </div>
        
        <form method="POST" action="">
            <button type="submit" name="resend" class="btn btn-primary btn-resend w-100 mb-3">
                <i class="fas fa-redo me-2"></i>Resend Verification Code
            </button>
        </form>
        
        <div class="text-center mt-4">
            <a href="verify.php" class="text-decoration-none mb-2 d-block">
                <i class="fas fa-arrow-left me-1"></i>Back to Verification
            </a>
            <a href="../logout.php" class="text-decoration-none text-muted">
                <i class="fas fa-sign-out-alt me-1"></i>Logout
            </a>
        </div>
    </div>
</body>
</html>
