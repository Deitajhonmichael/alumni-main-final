<?php
// Check and create verification_codes table
require_once 'config.php';

try {
    $conn = getDBConnection();
    
    echo "<h2>Verification Codes Table Check</h2>";
    
    // Check if table exists
    $stmt = $conn->query("SHOW TABLES LIKE 'verification_codes'");
    $tableExists = $stmt->fetch();
    
    if ($tableExists) {
        echo "<p style='color: green;'>✓ verification_codes table exists.</p>";
        
        // Show table structure
        echo "<h3>Table Structure:</h3>";
        $stmt = $conn->query("DESCRIBE verification_codes");
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['Field']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Type']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Null']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Key']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Default']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        // Show recent codes
        echo "<h3>Recent Verification Codes:</h3>";
        $stmt = $conn->query("SELECT * FROM verification_codes ORDER BY created_at DESC LIMIT 5");
        $codes = $stmt->fetchAll();
        
        if (count($codes) > 0) {
            echo "<table border='1' style='border-collapse: collapse;'>";
            echo "<tr><th>ID</th><th>User ID</th><th>Code</th><th>Created At</th><th>Expires At</th><th>Is Used</th></tr>";
            foreach ($codes as $code) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($code['id']) . "</td>";
                echo "<td>" . htmlspecialchars($code['user_id']) . "</td>";
                echo "<td>" . htmlspecialchars($code['code']) . "</td>";
                echo "<td>" . htmlspecialchars($code['created_at']) . "</td>";
                echo "<td>" . htmlspecialchars($code['expires_at']) . "</td>";
                echo "<td>" . htmlspecialchars($code['is_used']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color: orange;'>⚠ No verification codes found in the table.</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ verification_codes table does not exist. Creating it now...</p>";
        
        // Create the table
        $sql = "
        CREATE TABLE verification_codes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NOT NULL,
            code VARCHAR(6) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            expires_at DATETIME NOT NULL,
            is_used BOOLEAN DEFAULT FALSE,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
            INDEX idx_user_id (user_id),
            INDEX idx_code (code),
            INDEX idx_expires_at (expires_at)
        )";
        
        $conn->exec($sql);
        echo "<p style='color: green;'>✓ verification_codes table created successfully.</p>";
    }
    
} catch(PDOException $e) {
    echo "<p style='color: red;'>✗ Error: " . $e->getMessage() . "</p>";
}
?>
