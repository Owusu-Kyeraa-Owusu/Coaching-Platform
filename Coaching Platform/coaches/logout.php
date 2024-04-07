<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: ../Login/login.php");
    exit;
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: ../Login/login.php");
    exit;
}
?>
