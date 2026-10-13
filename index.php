<?php
require_once 'config.php';

// Redirect to login if not logged in
if (!isLoggedIn()) {
    redirect('login.php');
}

// Redirect based on role
if (isAdmin()) {
    redirect('admin/dashboard.php');
} elseif (isStaff()) {
    redirect('staff/dashboard.php');
} else {
    redirect('dashboard.php');
}
?>
