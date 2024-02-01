<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are provided
    if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["confirmPassword"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        // Validate username, email, and password (e.g., against database)
        // Here, you should perform database queries to check if username/email is already in use

        // Dummy validation for demo purposes (replace with actual database check)
        if ($password !== $confirmPassword) {
            // Redirect back to signup page with error message
            header("Location: signup.html?error=password_mismatch");
            exit();
        }

        // Dummy success for demo purposes
        // You should perform database insertion here
        // After successful signup, you can redirect to login page or dashboard
        header("Location: login.html");
        exit();
    } else {
        // Redirect back to signup page with error message
        header("Location: signup.html?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to signup page
    header("Location: signup.html");
    exit();
}
?>
