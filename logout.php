<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();
}

// Redirect the user to the login page or any desired page after logout
header("Location: Login Page.php");
exit();
?>