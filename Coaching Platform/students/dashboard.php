<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../css/student_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>

/* Main CSS Here */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            color: #000;
        }

        body {
            background-color: #cad7fda4;
            overflow-x: hidden;
        }

        header {
            height: 70px;
            width: 100%;
            padding: 0 30px;
            background-color: #fafaff;
            position: fixed;
            z-index: 100;
            box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 27px;
            font-weight: 600;
            color: rgb(47, 141, 70);
        }

        nav {
            margin-top: 70px; /* Adjust this margin as needed */
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #4b49ac;
        }

        nav ul li a:hover {
            color: #0c007d;
        }

    </style>
<body>
    <div class="container">
        <header>
            <h1>Dashboard</h1>
            <!-- Add any additional header content here -->
        </header>
        <nav>
            <ul>
                <li><a href="../students/track_progress.php"><i class="fas fa-chart-line icon"></i>Track Progress</a></li>
                <li><a href="../students/schedule_appointment.php"><i class="far fa-calendar-alt icon"></i>Schedule Appointments</a></li>
                <li><a href="../students/Manage_appointment.php"><i class="fas fa-tasks icon"></i>Manage Appointment</a></li>
                <li><a href="../students/student_profile.php"><i class="fas fa-user icon"></i>Profile</a></li>
                <li><a href="../students/logout.php"><i class="fas fa-sign-out-alt icon"></i>Logout</a></li>
            </ul>
        </nav>
        
        
    </div>
</body>
</html>
