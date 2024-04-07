<?php
include("../settings/connection.php");

// Function to fetch current appointments
function fetchCurrentAppointments() {
    global $conn;

    $appointments = []; // Initialize an array to store appointments

    // Retrieve current appointments from the database
    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $appointments[] = $row; // Store each appointment in the array
        }
    }

    return $appointments;
}

// Call the function to fetch current appointments
$currentAppointments = fetchCurrentAppointments();

// Output the appointments
if (!empty($currentAppointments)) {
    foreach ($currentAppointments as $appointment) {
        echo "<tr>";
        echo "<td>" . $appointment["id"] . "</td>";
        echo "<td>" . $appointment["coach"] . "</td>";
        echo "<td>" . $appointment["appointment_date"] . "</td>";
        echo "<td>" . $appointment["appointment_time"] . "</td>";
        echo "<td>";
        echo "<a href='../actions/edit_appointment.php?id=" . $appointment['id'] . "'><i class='fas fa-edit'></i></a>";
        echo "<a href='../actions/delete_appointments.php?id=" . $appointment['id'] . "'><i class='fas fa-trash-alt'></i></a>";
        echo "<a href='../actions/students_completed_appointment.php?id=" . $appointment['id'] . "'><i class='fas fa-check'></i></a>"; // Icon for completing appointment
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No appointments found</td></tr>";
}
?>
