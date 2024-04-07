<?php
//session_start();
// Include your database connection file
include("../settings/connection.php");

// Initialize variables to avoid PHP notices


// Check if role is selected as student
// if (isset($_POST["role_id"]) && $_POST["role_id"] == 1){
    // Retrieve user's data from the database
    $sql = "SELECT * FROM users "; // Assuming there's only one student
    $result = $conn->query($sql);
    $row=mysqli_fetch_assoc($result);
            // $_SESSION["email"] = $email;
            // $_SESSION["id"] = $id;
            $name = $row["name"];
            $student_id = $row["student_id"];
            $class = $row["class"];
            $gender = $row["gender"];
            $academic_year = $row["academic_year"];
            $image= $row['profile_picture_path'];

            

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel='stylesheet' href="../css/student_profile.css">
</head>
<body>
    <header>
        <a href="../students/dashboard.php" class="back-link"><i class="fas fa-arrow-left"></i></a> <!-- Back arrow icon -->
    </header>
    
    <div class="student-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                        <img src='../img/$image' alt='Profile Picture of $name' class='profile-picture'>                            <h3><?php echo $name; ?></h3>
                        </div>
                        <div class="card-body">
                            <p class="mb-0"><strong class="pr-1">Student ID:</strong> <?php echo $student_id; ?></p>
                            <p class="mb-0"><strong class="pr-1">Class:</strong> <?php echo $class; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0">General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Name</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $name; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Gender</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $gender; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Academic Year</th>
                                    <td width="2%">:</td>
                                    <td><?php echo $academic_year; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0">Other Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <ol>
                                <li>Goal 1:</li>
                                <li>Goal 2:</li>
                                <li>Goal 3:</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> -->
