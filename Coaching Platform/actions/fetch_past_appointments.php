<?php
// Include database connection file
include("../settings/connection.php");

// Function to move appointment to past appointments table
function moveAppointmentToPast($id, $conn) {
    // Fetch appointment data from the current appointments table
    $sql_select = "SELECT * FROM appointments WHERE id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("i", $id);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Insert appointment data into the past appointments table
        $sql_insert = "INSERT INTO past_appointment (appointment_id, coach, date, time) VALUES (?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("isss", $row['id'], $row['coach'], $row['date'], $row['time']);
        $stmt_insert->execute();
        $stmt_insert->close();

        // Delete the appointment from the current appointments table
        $sql_delete = "DELETE FROM appointments WHERE id = ?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("i", $id);
        $stmt_delete->execute();
        $stmt_delete->close();

        return true; // Appointment moved successfully
    } else {
        // Appointment not found
        return false;
    }
}

// Check if appointment ID is provided
if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];

    // Move the appointment to past appointments
    if (moveAppointmentToPast($appointment_id, $conn)) {
        // Redirect back to manage_appointments.php
        header("Location: ../students/Manage_appointment.php");
        exit();
    } else {
        // Display error message if appointment is not found
        echo "Appointment not found.";
    }
}
?>
