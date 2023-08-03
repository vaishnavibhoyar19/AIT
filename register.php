<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $studentId = $_POST["studentId"];
    $firstName = $_POST["firstName"];
    $surname = $_POST["surname"];
    $mobileNo = $_POST["mobileNo"];
    $address = $_POST["address"];

    // Store form data in session
    $_SESSION["studentId"] = $studentId;
    $_SESSION["firstName"] = $firstName;
    $_SESSION["surname"] = $surname;
    $_SESSION["mobileNo"] = $mobileNo;
    $_SESSION["address"] = $address;

    // Redirect to student dashboard or another page
    header("Location: dashboard.php");
    exit();
}
?>