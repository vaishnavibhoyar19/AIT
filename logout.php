<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Delete the cookie
setcookie("username", "", time() - 3600, "/"); // Set cookie to past time

// Redirect to login page
header("Location: login.php");
exit();
?>