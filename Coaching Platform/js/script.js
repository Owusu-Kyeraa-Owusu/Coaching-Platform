const container = document.querySelector(".container"),
pwShowHide = document.querySelectorAll(".showHidePw"),
pwFields = document.querySelectorAll(".password"),
signUp = document.querySelector(".signup-link"),
login = document.querySelector(".login-link");

// Regular expressions for validation
const nameRegex = /^[A-Za-z\s]+$/; // Only allows alphabets and spaces
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Checks for a valid email format
const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()-_+=])(?=.*[a-z]).{8,}$/; // Must have at least one alphabet, one lowercase letter, one symbol, one number, and minimum length of 8 characters

// Function to validate password strength
function validatePasswordStrength(password) {
    return passwordRegex.test(password);
}

// Function to validate input fields
function validateInput(input, regex) {
    return regex.test(input);
}

// Event listener to show/hide password and change icon
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            if (pwField.type === "password") {
                pwField.type = "text";
                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                });
            } else {
                pwField.type = "password";
                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                });
            }
        });
    });
});

// Event listener to appear signup and login form
signUp.addEventListener("click", () => {
    container.classList.add("active");
});

login.addEventListener("click", () => {
    container.classList.remove("active");
});
