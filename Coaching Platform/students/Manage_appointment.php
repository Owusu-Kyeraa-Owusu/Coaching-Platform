<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments</title>
    <link rel="stylesheet" href="../css/manage_appointment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <a href="../students/dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i></a> <!-- Back arrow icon -->
        <h1>Manage Your Appointments</h1>
    </header>
    <a href="../students/schedule_appointment.php" class="book-appointment">New Appointment</a>
    <main>
        <div class="calendar">
        </div>
        <div class="appointments">
            <h2>Current Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Appointment ID</th>
                        <th>Coach Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../actions/fetch_current_appointments.php");
                    include("../actions/delete_appointments.php");
                    include("../actions/edit_appointment.php");
                    
                    
                    ?>
                </tbody>
            </table>
            <h2>Past Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Appointment ID</th>
                        <th>Coach Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
               include("../actions/fetch_past_appointments.php");
                    // Fetch past appointments from the database
                    $sql_past_appointments = "SELECT * FROM past_appointment";
                    $result_past_appointments = $conn->query($sql_past_appointments);

                    // Check if there are past appointments
                    if ($result_past_appointments->num_rows > 0) {
                        // Output data of each row
                        while ($row_past_appointment = $result_past_appointments->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row_past_appointment["appointment_id"] . "</td>";
                            echo "<td>" . $row_past_appointment["coach"] . "</td>";
                            echo "<td>" . $row_past_appointment["date"] . "</td>";
                            echo "<td>" . $row_past_appointment["time"] . "</td>";
                            echo "<td> Actions </td>"; // You can add action buttons here
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No past appointments</td></tr>";
                    }
                    ?>
                </tbody>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
