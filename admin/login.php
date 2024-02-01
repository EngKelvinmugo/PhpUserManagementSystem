<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate username and password (e.g., against database)
        // Here, you should perform database query to check credentials

        // Dummy check for demo purposes (replace with actual database check)
        $adminUsername = "admin";
        $adminPassword = "admin123";

        if ($username === $adminUsername && $password === $adminPassword) {
            // Redirect to admin dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // Redirect back to login page with error message
            header("Location:  login.html?error=invalid_credentials");
            exit();
        }
    } else {
        // Redirect back to login page with error message
        header("Location: login.html?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to login page
    header("Location: login.html");
    exit();
}
?>
