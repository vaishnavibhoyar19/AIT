<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve session data
$studentId = $_SESSION["studentId"];
$firstName = $_SESSION["firstName"];
$surname = $_SESSION["surname"];
$mobileNo = $_SESSION["mobileNo"];
$address = $_SESSION["address"];

// Display student information
echo "Welcome, $firstName $surname!<br>";
echo "Student ID: $studentId<br>";
echo "Mobile No: $mobileNo<br>";
echo "Address: $address<br>";

// Logout link
echo "<a href='logout.php'>Logout</a>";
?>