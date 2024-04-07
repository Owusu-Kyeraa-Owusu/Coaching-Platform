<?php
// Include database connection file
include("../settings/connection.php");

// Check if appointment ID is provided
if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];

    // Prepare and execute SQL query to delete appointment
    $sql = "DELETE FROM appointments WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $appointment_id);
    
    if ($stmt->execute()) {
        // Appointment deleted successfully, redirect back to manage_appointments.php
        header("Location: ../students/Manage_appointment.php");
        exit();
    } else {
        // Error deleting appointment
        echo "Error deleting appointment: " . $conn->error;
    }

    // Close prepared statement
    $stmt->close();
}
?>
