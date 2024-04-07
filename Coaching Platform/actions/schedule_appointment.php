<?php
// Include your database connection file
include("../settings/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $appointment_date = $_POST["appointment_date"];
    $coach = $_POST["coach"];
    $appointment_time = $_POST["appointment_time"];

    // Prepare and execute SQL query to insert appointment data into the database
    $sql = "INSERT INTO appointments (full_name, phone_number, email, appointment_date, coach, appointment_time) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $full_name, $phone_number, $email, $appointment_date, $coach, $appointment_time);
    
    if ($stmt->execute()) {
        // Appointment booked successfully
        echo "<script>alert('Appointment booked successfully!'); window.location.href = '../students/Manage_appointment.php';</script>";
    } else {
        // Error booking appointment
        echo "Error booking appointment: " . $conn->error;
    }

    // Close prepared statement
    $stmt->close();
}


?>
