<?php
// Database connection
include('../settings/connection.php');

// Start session
session_start();

// Function to get user role ID from session
function getUserRoleID() {
    if (isset($_SESSION["role_id"])) {
        return $_SESSION["role_id"];
    } else {
        return false;
    }
}

// Redirect function
function redirect($url) {
    header("Location: $url");
    exit();
}

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}

// Function to check if user is an admin
function isAdmin() {
    return isLoggedIn() && isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2;
}

// Function to check if user is a coach
function isCoach() {
    return isLoggedIn() && isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1;
}

// Function to display error message
function displayErrorMessage($msg) {
    echo "<div class='alert alert-danger' role='alert'>$msg</div>";
}

// Function to display success message
function displaySuccessMessage($msg) {
    echo "<div class='alert alert-success' role='alert'>$msg</div>";
}

// Function to display info message
function displayInfoMessage($msg) {
    echo "<div class='alert alert-info' role='alert'>$msg</div>";
}

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

// Close database connection
function closeConnection() {
    global $conn;
    if ($conn) {
        $conn->close();
    }
}

?>
