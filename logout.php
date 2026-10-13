<?php
require_once 'config.php';

if (isLoggedIn()) {
    logActivity(getCurrentUserId(), 'User logged out');
    clearVerification();
    session_destroy();
}

redirect('login.php');
?>
