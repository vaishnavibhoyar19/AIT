<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password (replace with your authentication logic)
    if ($username === "admin" && $password === "password") {
        // Set session variables
        $_SESSION["username"] = $username;

        // Set cookie to remember login
        setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie valid for 30 days

        // Redirect to student dashboard or another page
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>