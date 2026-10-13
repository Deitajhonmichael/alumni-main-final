<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'alumni_system');

// Site Configuration
define('SITE_NAME', 'Alumni Management System');
define('SITE_URL', 'http://localhost/alumni1-main/alumni');
define('ADMIN_EMAIL', 'leahbatal40@gmail.com');

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'leahbatal40@gmail.com');
define('SMTP_PASSWORD', 'smlzauylwkuugkjl'); // Use App Password, not regular password
define('SMTP_FROM', 'leahbatal40@gmail.com');
define('SMTP_FROM_NAME', 'Alumni Management System');

// Session Configuration
define('SESSION_NAME', 'alumni_session');
define('SESSION_LIFETIME', 3600);

// File Upload Configuration
define('UPLOAD_DIR', __DIR__ . '/uploads/');
define('MAX_FILE_SIZE', 5242880); // 5MB
define('ALLOWED_IMAGE_TYPES', ['image/jpeg', 'image/png', 'image/gif']);

// Create upload directory if it doesn't exist
if (!file_exists(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0777, true);
}

// Database Connection
function getDBConnection() {
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Start Session
if (session_status() == PHP_SESSION_NONE) {
    session_name(SESSION_NAME);
    session_start();
}

// Helper Functions
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function redirect($url) {
    header("Location: $url");
    exit();
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function isStaff() {
    return isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'staff');
}

function requireLogin() {
    if (!isLoggedIn()) {
        redirect('login.php');
    }
}

function requireAdmin() {
    if (!isAdmin()) {
        redirect('dashboard.php');
    }
}

function getCurrentUserId() {
    return $_SESSION['user_id'] ?? null;
}

function getCurrentUserRole() {
    return $_SESSION['role'] ?? null;
}

function getCurrentAlumniId() {
    return $_SESSION['alumni_id'] ?? null;
}

function formatDate($date, $format = 'Y-m-d') {
    return date($format, strtotime($date));
}

function formatCurrency($amount) {
    return '$' . number_format($amount, 2);
}

function logActivity($userId, $action, $tableName = null, $recordId = null) {
    try {
        $conn = getDBConnection();
        $stmt = $conn->prepare("INSERT INTO activity_log (user_id, action, table_name, record_id, ip_address) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$userId, $action, $tableName, $recordId, $_SERVER['REMOTE_ADDR']]);
    } catch(PDOException $e) {
        error_log("Activity log failed: " . $e->getMessage());
    }
}

function uploadFile($file, $subdir = '') {
    if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }
    
    if (!in_array($file['type'], ALLOWED_IMAGE_TYPES)) {
        return false;
    }
    
    if ($file['size'] > MAX_FILE_SIZE) {
        return false;
    }
    
    $uploadPath = UPLOAD_DIR . $subdir;
    if (!empty($subdir) && !file_exists($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }
    
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . '.' . $extension;
    $filepath = $uploadPath . $filename;
    
    if (move_uploaded_file($file['tmp_name'], $filepath)) {
        return 'uploads/' . $subdir . $filename;
    }
    
    return false;
}

function flashMessage($type, $message) {
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function getFlashMessage() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// Verification Functions
function generateVerificationCode($userId) {
    try {
        $conn = getDBConnection();
        
        // Generate 6-digit code
        $code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        
        // Set expiration to 1 minute from now
        $expiresAt = date('Y-m-d H:i:s', strtotime('+1 minute'));
        
        // Delete any existing unused codes for this user
        $stmt = $conn->prepare("DELETE FROM verification_codes WHERE user_id = ? AND is_used = FALSE");
        $stmt->execute([$userId]);
        
        // Insert new verification code
        $stmt = $conn->prepare("INSERT INTO verification_codes (user_id, code, expires_at) VALUES (?, ?, ?)");
        $stmt->execute([$userId, $code, $expiresAt]);
        
        return $code;
    } catch(PDOException $e) {
        error_log("Verification code generation failed: " . $e->getMessage());
        return false;
    }
}

function verifyCode($userId, $code) {
    try {
        $conn = getDBConnection();
        
        // Debug: Log the verification attempt
        $currentTime = date('Y-m-d H:i:s');
        error_log("Verifying code: user_id=$userId, code=$code, current_time=$currentTime");
        
        // First, check if code exists without expiration
        $stmt = $conn->prepare("
            SELECT * FROM verification_codes 
            WHERE user_id = ? AND code = ? AND is_used = FALSE
        ");
        $stmt->execute([$userId, $code]);
        $verification = $stmt->fetch();
        
        if (!$verification) {
            error_log("Code not found or already used");
            return false;
        }
        
        error_log("Code found: expires_at=" . $verification['expires_at'] . ", is_used=" . ($verification['is_used'] ? 'true' : 'false'));
        
        // Check expiration manually for debugging
        $expiresAt = strtotime($verification['expires_at']);
        $now = time();
        $timeDiff = $expiresAt - $now;
        
        error_log("Time check: expires_at_timestamp=$expiresAt, now_timestamp=$now, diff_seconds=$timeDiff");
        
        if ($expiresAt < $now) {
            error_log("Code is expired by " . abs($timeDiff) . " seconds");
            return false;
        }
        
        // Mark code as used
        $stmt = $conn->prepare("UPDATE verification_codes SET is_used = TRUE WHERE id = ?");
        $stmt->execute([$verification['id']]);
        
        // Set session as verified
        $_SESSION['verified'] = true;
        
        error_log("Verification successful");
        return true;
        
    } catch(PDOException $e) {
        error_log("Verification code check failed: " . $e->getMessage());
        return false;
    }
}

function isVerified() {
    return isset($_SESSION['verified']) && $_SESSION['verified'] === true;
}

function requireVerification() {
    if (!isVerified()) {
        redirect('verify.php');
    }
}

function clearVerification() {
    unset($_SESSION['verified']);
}

// Email Sending Function using PHPMailer
function sendVerificationEmail($toEmail, $code) {
    require_once __DIR__ . '/PHPMailer-6.8.1/src/PHPMailer.php';
    require_once __DIR__ . '/PHPMailer-6.8.1/src/SMTP.php';
    require_once __DIR__ . '/PHPMailer-6.8.1/src/Exception.php';
    
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = SMTP_PORT;
        
        // Recipients
        $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
        $mail->addAddress($toEmail);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your Verification Code - ' . SITE_NAME;
        $mail->Body    = "
            <html>
            <head>
            <title>Verification Code</title>
            </head>
            <body>
            <h2>Email Verification</h2>
            <p>Your verification code is: <strong style='font-size: 24px; color: #667eea;'>$code</strong></p>
            <p>This code will expire in 1 minute.</p>
            <p>If you didn't request this code, please ignore this email.</p>
            <hr>
            <p style='color: #666; font-size: 12px;'>This is an automated email from " . SITE_NAME . "</p>
            </body>
            </html>
        ";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Email failed: " . $mail->ErrorInfo);
        return false;
    }
}
?>
