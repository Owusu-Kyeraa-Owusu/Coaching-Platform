<?php
// Include database connection file
include("../settings/connection.php");

// Check if appointment ID is provided
if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];

    // Fetch appointment data from the current appointments table
    $sql_select = "SELECT * FROM appointments WHERE appointment_id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("i", $appointment_id);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Insert appointment data into the past appointments table
        $sql_insert = "INSERT INTO past_appointments (appointment_id, coach, date, time) VALUES (?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("isss", $row['appointment_id'], $row['coach'], $row['date'], $row['time']);
        $stmt_insert->execute();

        // Delete the appointment from the current appointments table
        $sql_delete = "DELETE FROM current_appointments WHERE appointment_id = ?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("i", $appointment_id);
        $stmt_delete->execute();

        // Redirect back to manage_appointments.php
        header("Location: ../students/manage_appointments.php");
        exit();
    } else {
        // Appointment not found
        echo "Appointment not found.";
    }

    // Close prepared statements
    $stmt_select->close();
    $stmt_insert->close();
    $stmt_delete->close();
} else {
    // Redirect to manage_appointments.php if appointment ID is not provided
    header("Location: ../students/manage_appointments.php");
    exit();
}
?>
