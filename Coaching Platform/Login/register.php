<?php

include ('../settings/connection.php');
include ('../actions/fetch_roles.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register Form</title> 
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Register</span>
                <form method="post" action="../actions/register.php" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <select name="gender" required>
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="input-field">
                         <select name="role" required>
                         <option value="" disabled selected>Select your role</option>
                         <?php foreach ($roles as $role): ?>
                         <option value="<?php echo $role['id']; ?>"><?php echo $role['name']; ?></option>
                         <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="input-field">
                        <input type="text" name="studentID" placeholder="Student ID" required>
                        <i class="uil uil-user-graduate"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" name="class" placeholder="Class" required>
                        
                    </div>

                    <div class="input-field">
                        <input type="text" name="academicYear" placeholder="Academic Year" required>
                        
                    </div>

                    <div class="input-field">
                    <label>Select your goals (up to 3)</label><br>
                    <input type="checkbox" name="goals[]" value="Goal 1"> Goal 1<br>
                    <input type="checkbox" name="goals[]" value="Goal 2"> Goal 2<br>
                    <input type="checkbox" name="goals[]" value="Goal 3"> Goal 3<br>
                    <input type="checkbox" name="goals[]" value="Goal 4"> Goal 4<br>
                    <!-- Add more goals as needed -->
</div>


                    <div class="input-field">
                        <input type="text" name="phoneNumber" placeholder="Phone Number" required>
                        <i class="uil uil-phone icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
        <input type="file" name="profilePicture" accept="image/*" required>
        <i class="uil uil-image icon"></i>
    </div>

                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon" required>
                            <label for="termCon" class="text">I accept all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="../Login/login.php" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                var image = document.createElement('img');
                image.src = reader.result;
                preview.innerHTML = '';
                preview.appendChild(image);
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script> 
</body>
</html>
