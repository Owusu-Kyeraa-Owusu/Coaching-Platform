<?php

include ('../actions/fetch_roles.php'); 
include ('../settings/connection.php'); 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $role = $_POST["role"];
    $studentID = $_POST["studentID"];
    $class = $_POST["class"];
    $academicYear = $_POST["academicYear"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $termsAndConditions = isset($_POST["termCon"]) ? 1 : 0; // Check if terms and conditions checkbox is checked

    // Handle profile picture upload
    if(isset($_FILES["profilePicture"])) {
        $profilePictureTmp = $_FILES["profilePicture"]["tmp_name"];
        if(!empty($profilePictureTmp)) {
            // Move uploaded file to desired location
            $uploadDir = "../img/";
            $profilePicturePath = $uploadDir . basename($_FILES["profilePicture"]["name"]);
            move_uploaded_file($profilePictureTmp, $profilePicturePath);
        } else {
            echo "Error: Profile picture upload failed.";
            exit; // Terminate script execution
        }
    } else {
        echo "Error: Profile picture not found in form data.";
        exit; // Terminate script execution
    }

    // Prepare SQL statement
    $sql = "INSERT INTO users (name, gender, role_id, student_id, class, academic_year, phone_number, email, profile_picture_path, password, terms_and_conditions) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssissssssss", $name, $gender, $role, $studentID, $class, $academicYear, $phoneNumber, $email, $profilePicturePath, $password, $termsAndConditions);

        // Execute the statement
        if ($stmt->execute()) {
            // Registration successful
            header("Location: ../Login/login.php"); // Redirect to login page
            exit; // Stop further execution
        } else {
            // Registration failed
            echo "Error executing the statement: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // Error in preparing the statement
        echo "Error preparing the statement: " . $conn->error;
    }
}
?>
