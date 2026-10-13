<?php
require_once '../config.php';

// Redirect to login if not logged in
if (!isLoggedIn()) {
    redirect('../login.php');
}

// If already verified, redirect to admin dashboard
if (isVerified()) {
    redirect('dashboard.php');
}

// Redirect non-admin users
if (!isAdmin()) {
    redirect('../verify.php');
}

$error = '';
$success = '';
$user_id = getCurrentUserId();
$email = $_SESSION['email'] ?? '';

// Generate verification code if not exists
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $code = generateVerificationCode($user_id);
    if ($code) {
        // Send verification code via email
        $emailSent = sendVerificationEmail($email, $code);
        if ($emailSent) {
            $success = "Verification code has been sent to your admin email: <strong>$email</strong>. Please check your inbox (and spam folder).";
        } else {
            // TEMPORARY: Display code for testing if email fails
            $success = "Email sending failed. Your verification code is: <strong>$code</strong> (Please configure php.ini - see PHPINI_CONFIG.md)";
        }
    } else {
        $error = 'Failed to generate verification code. Please try again.';
    }
}

// Handle code verification
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['code'])) {
        $enteredCode = sanitizeInput($_POST['code']);
        
        if (verifyCode($user_id, $enteredCode)) {
            logActivity($user_id, 'Admin completed email verification');
            flashMessage('success', 'Verification successful! Welcome to the Admin Dashboard.');
            $verificationSuccess = true;
        } else {
            $error = 'Invalid or expired verification code. Please try again.';
        }
    }
    
    // Handle resend code
    if (isset($_POST['resend'])) {
        $code = generateVerificationCode($user_id);
        if ($code) {
            // Send verification code via email
            $emailSent = sendVerificationEmail($email, $code);
            if ($emailSent) {
                logActivity($user_id, 'Admin requested new verification code');
                $success = "New verification code has been sent to your admin email: <strong>$email</strong>. Please check your inbox (and spam folder).";
            } else {
                // TEMPORARY: Display code for testing if email fails
                $success = "Email sending failed. Your new verification code is: <strong>$code</strong> (Please configure php.ini - see PHPINI_CONFIG.md)";
            }
        } else {
            $error = 'Failed to generate verification code. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Verification - <?php echo SITE_NAME; ?></title>
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
        .verify-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 450px;
            width: 100%;
        }
        .verify-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .verify-header h2 {
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
        .code-input {
            letter-spacing: 8px;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            border-radius: 8px;
            padding: 12px;
        }
        .btn-verify {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
        }
        .btn-verify:hover {
            opacity: 0.9;
        }
        .security-notice {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .loading-screen {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 9999;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: 'Courier New', monospace;
            overflow: hidden;
        }
        .matrix-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            pointer-events: none;
        }
        .hacker-text {
            color: #00ff00;
            font-size: 20px;
            text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00;
            margin-bottom: 20px;
            white-space: pre-wrap;
            z-index: 10;
            position: relative;
        }
        .progress-bar {
            width: 300px;
            height: 20px;
            border: 2px solid #00ff00;
            background: #000;
            position: relative;
            overflow: hidden;
            z-index: 10;
            box-shadow: 0 0 10px #00ff00, inset 0 0 10px rgba(0, 255, 0, 0.2);
        }
        .progress-fill {
            height: 100%;
            background: #00ff00;
            width: 0%;
            box-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00;
            transition: width 0.1s linear;
            position: relative;
        }
        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 1s infinite;
        }
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        .progress-text {
            color: #00ff00;
            font-size: 14px;
            margin-top: 10px;
            text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00;
            z-index: 10;
            position: relative;
        }
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
        .cursor {
            display: inline-block;
            width: 10px;
            height: 20px;
            background: #00ff00;
            animation: blink 1s infinite;
            vertical-align: middle;
            margin-left: 5px;
            box-shadow: 0 0 10px #00ff00;
        }
        @keyframes glitch {
            0% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
            100% { transform: translate(0); }
        }
        .glitch-effect {
            animation: glitch 0.3s infinite;
        }
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #00ff00;
            box-shadow: 0 0 5px #00ff00;
            animation: float 3s infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0; }
            50% { transform: translateY(-100px) rotate(180deg); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="verify-card">
        <div class="verify-header">
            <span class="admin-badge"><i class="fas fa-shield-alt me-1"></i>ADMIN ACCESS</span>
            <i class="fas fa-user-shield fa-3x mb-3" style="color: #1e3c72;"></i>
            <h2>Admin Verification</h2>
            <p>Enter the code sent to your admin email</p>
        </div>
        
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-info"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <div class="mb-4">
            <div class="card bg-light">
                <div class="card-body">
                    <p class="mb-0"><strong>Admin Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                </div>
            </div>
        </div>
        
        <form method="POST" action="">
            <div class="mb-4">
                <label class="form-label text-center d-block">Verification Code</label>
                <input type="text" class="form-control code-input" name="code" placeholder="000000" maxlength="6" pattern="[0-9]{6}" required autofocus>
                <small class="text-muted text-center d-block mt-2">Enter the 6-digit code sent to your email</small>
            </div>
            
            <button type="submit" class="btn btn-primary btn-verify w-100 mb-3">
                <i class="fas fa-unlock me-2"></i>Verify Admin Access
            </button>
        </form>
        
        <div class="text-center">
            <p class="mb-2">Didn't receive the code?</p>
            <form method="POST" action="">
                <button type="submit" name="resend" class="btn btn-link text-decoration-none">
                    <i class="fas fa-redo me-1"></i>Resend Code
                </button>
            </form>
            <a href="resend_verification.php" class="btn btn-link text-decoration-none">
                <i class="fas fa-paper-plane me-1"></i>Go to Resend Page
            </a>
        </div>
        
        <div class="security-notice">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Security Notice:</strong> This is an admin verification. Ensure you are on a secure network before proceeding.
        </div>
        
        <div class="text-center mt-4">
            <a href="../logout.php" class="text-decoration-none text-muted">
                <i class="fas fa-sign-out-alt me-1"></i>Logout
            </a>
        </div>
    </div>
    
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <canvas class="matrix-bg" id="matrixCanvas"></canvas>
        <div class="particles" id="particles"></div>
        <div class="hacker-text" id="hackerText"></div>
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>
        <div class="progress-text" id="progressText">0%</div>
    </div>
    
    <script>
        // Auto-focus on the code input
        document.querySelector('.code-input').focus();
        
        // Allow only numbers
        document.querySelector('.code-input').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Show loading screen and redirect if verification was successful
        <?php if (isset($verificationSuccess) && $verificationSuccess): ?>
            document.addEventListener('DOMContentLoaded', function() {
                const loadingScreen = document.getElementById('loadingScreen');
                const verifyCard = document.querySelector('.verify-card');
                const hackerText = document.getElementById('hackerText');
                const progressFill = document.getElementById('progressFill');
                const progressText = document.getElementById('progressText');
                const matrixCanvas = document.getElementById('matrixCanvas');
                const particlesContainer = document.getElementById('particles');
                
                // Hide verify card and show loading screen
                verifyCard.style.display = 'none';
                loadingScreen.style.display = 'flex';
                
                // Matrix rain effect
                const ctx = matrixCanvas.getContext('2d');
                matrixCanvas.width = window.innerWidth;
                matrixCanvas.height = window.innerHeight;
                
                const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*()';
                const fontSize = 14;
                const columns = matrixCanvas.width / fontSize;
                const drops = Array(Math.floor(columns)).fill(1);
                
                function drawMatrix() {
                    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
                    ctx.fillRect(0, 0, matrixCanvas.width, matrixCanvas.height);
                    ctx.fillStyle = '#00ff00';
                    ctx.font = fontSize + 'px monospace';
                    
                    for (let i = 0; i < drops.length; i++) {
                        const text = chars[Math.floor(Math.random() * chars.length)];
                        ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                        
                        if (drops[i] * fontSize > matrixCanvas.height && Math.random() > 0.975) {
                            drops[i] = 0;
                        }
                        drops[i]++;
                    }
                }
                
                const matrixInterval = setInterval(drawMatrix, 50);
                
                // Create floating particles
                function createParticles() {
                    for (let i = 0; i < 30; i++) {
                        const particle = document.createElement('div');
                        particle.className = 'particle';
                        particle.style.left = Math.random() * 100 + '%';
                        particle.style.top = Math.random() * 100 + '%';
                        particle.style.animationDelay = Math.random() * 3 + 's';
                        particlesContainer.appendChild(particle);
                    }
                }
                createParticles();
                
                // Hacker-style text animation
                const messages = [
                    'INITIALIZING ADMIN VERIFICATION PROTOCOL...',
                    'AUTHENTICATING ADMIN CREDENTIALS...',
                    'VALIDATING SECURITY CLEARANCE...',
                    'ESTABLISHING SECURE CONNECTION...',
                    'ADMIN ACCESS GRANTED. REDIRECTING...'
                ];
                
                let messageIndex = 0;
                let charIndex = 0;
                const totalDuration = 5000; // 5 seconds
                const messageInterval = totalDuration / messages.length;
                
                function typeMessage() {
                    if (messageIndex < messages.length) {
                        const currentMessage = messages[messageIndex];
                        
                        if (charIndex < currentMessage.length) {
                            hackerText.innerHTML = currentMessage.substring(0, charIndex + 1) + '<span class="cursor"></span>';
                            charIndex++;
                            setTimeout(typeMessage, 30); // Typing speed
                        } else {
                            messageIndex++;
                            charIndex = 0;
                            setTimeout(typeMessage, messageInterval - (currentMessage.length * 30));
                        }
                    }
                }
                
                // Progress bar animation
                let progress = 0;
                const progressInterval = setInterval(() => {
                    progress += 2; // 100% / 50 steps (5 seconds / 100ms)
                    if (progress > 100) progress = 100;
                    progressFill.style.width = progress + '%';
                    progressText.textContent = Math.floor(progress) + '%';
                    
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                    }
                }, 100);
                
                // Start typing animation
                typeMessage();
                
                // Add glitch effect periodically
                setInterval(() => {
                    hackerText.classList.add('glitch-effect');
                    setTimeout(() => {
                        hackerText.classList.remove('glitch-effect');
                    }, 300);
                }, 2000);
                
                // Redirect to dashboard after 5 seconds
                setTimeout(function() {
                    clearInterval(matrixInterval);
                    window.location.href = 'dashboard.php';
                }, 5000);
            });
        <?php endif; ?>
    </script>
</body>
</html>
