<?php
// Start session
session_start();

// Technique 1: Basic Session Usage
$_SESSION['username'] = 'JohnDoe';
$_SESSION['loggedIn'] = true;

// Technique 2: Accessing Session Data
$username = $_SESSION['username'];
$loggedIn = $_SESSION['loggedIn'];

echo "Technique 1: Basic Session Usage<br>";
echo "Username: $username<br>";
echo "Logged In: " . ($loggedIn ? 'Yes' : 'No') . "<br>";

// Technique 3: Unsetting Session Data
unset($_SESSION['loggedIn']);

// Technique 4: Checking if Session Data Exists
if (isset($_SESSION['loggedIn'])) {
    echo "Logged In: Yes<br>";
} else {
    echo "Logged In: No<br>";
}

// Technique 5: Destroying Session
session_destroy();

// Technique 6: Checking if Session is Active
if (session_status() === PHP_SESSION_ACTIVE) {
    echo "Session Active: Yes";
} else {
    echo "Session Active: No";
}
?>
