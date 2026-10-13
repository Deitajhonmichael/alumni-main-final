<?php
// Debug verification code issue
require_once 'config.php';

session_start();

echo "<h2>Verification Debug Tool</h2>";

// Check if logged in
if (!isLoggedIn()) {
    echo "<p style='color: red;'>✗ Not logged in. Please <a href='login.php'>login first</a>.</p>";
    exit;
}

echo "<h3>Session Information:</h3>";
echo "<pre>";
echo "User ID: " . ($_SESSION['user_id'] ?? 'Not set') . "\n";
echo "Username: " . ($_SESSION['username'] ?? 'Not set') . "\n";
echo "Email: " . ($_SESSION['email'] ?? 'Not set') . "\n";
echo "Role: " . ($_SESSION['role'] ?? 'Not set') . "\n";
echo "Verified: " . (isset($_SESSION['verified']) ? ($_SESSION['verified'] ? 'Yes' : 'No') : 'Not set') . "\n";
echo "</pre>";

try {
    $conn = getDBConnection();
    $user_id = getCurrentUserId();
    
    echo "<h3>Database Information:</h3>";
    
    // Check if verification_codes table exists
    $stmt = $conn->query("SHOW TABLES LIKE 'verification_codes'");
    $tableExists = $stmt->fetch();
    
    if ($tableExists) {
        echo "<p style='color: green;'>✓ verification_codes table exists.</p>";
        
        // Show recent codes for this user
        $stmt = $conn->prepare("SELECT * FROM verification_codes WHERE user_id = ? ORDER BY created_at DESC LIMIT 5");
        $stmt->execute([$user_id]);
        $codes = $stmt->fetchAll();
        
        echo "<h3>Recent Verification Codes for User ID $user_id:</h3>";
        
        if (count($codes) > 0) {
            echo "<table border='1' style='border-collapse: collapse;'>";
            echo "<tr><th>ID</th><th>Code</th><th>Created At</th><th>Expires At</th><th>Is Used</th><th>Status</th></tr>";
            foreach ($codes as $code) {
                $status = 'Valid';
                if ($code['is_used']) {
                    $status = 'Already Used';
                } elseif (strtotime($code['expires_at']) < time()) {
                    $status = 'Expired';
                }
                
                echo "<tr>";
                echo "<td>" . htmlspecialchars($code['id']) . "</td>";
                echo "<td><strong>" . htmlspecialchars($code['code']) . "</strong></td>";
                echo "<td>" . htmlspecialchars($code['created_at']) . "</td>";
                echo "<td>" . htmlspecialchars($code['expires_at']) . "</td>";
                echo "<td>" . htmlspecialchars($code['is_used']) . "</td>";
                echo "<td style='color: " . ($status === 'Valid' ? 'green' : 'red') . ";'>" . htmlspecialchars($status) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color: orange;'>⚠ No verification codes found for this user.</p>";
            echo "<p>Generating a test code now...</p>";
            
            $testCode = generateVerificationCode($user_id);
            if ($testCode) {
                echo "<p style='color: green;'>✓ Test code generated: <strong>$testCode</strong></p>";
                echo "<p>Use this code to test verification.</p>";
            }
        }
    } else {
        echo "<p style='color: red;'>✗ verification_codes table does not exist.</p>";
        echo "<p><a href='setup_verification.php'>Create the table now</a></p>";
    }
    
    // Test verification function
    echo "<h3>Test Verification Function:</h3>";
    echo "<form method='POST'>";
    echo "<input type='text' name='test_code' placeholder='Enter code to test' maxlength='6'>";
    echo "<button type='submit'>Test</button>";
    echo "</form>";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_code'])) {
        $testCode = sanitizeInput($_POST['test_code']);
        echo "<p>Testing code: <strong>$testCode</strong></p>";
        
        $result = verifyCode($user_id, $testCode);
        echo "<p style='color: " . ($result ? 'green' : 'red') . ";'>" . ($result ? '✓ Code is valid' : '✗ Code is invalid or expired') . "</p>";
    }
    
} catch(PDOException $e) {
    echo "<p style='color: red;'>✗ Database Error: " . $e->getMessage() . "</p>";
}
?>
