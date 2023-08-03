<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form action="register.php" method="POST">
        <label for="studentId">Student ID:</label>
        <input type="text" name="studentId" required><br>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required><br>

        <label for="surname">Surname:</label>
        <input type="text" name="surname" required><br>

        <label for="mobileNo">Mobile No:</label>
        <input type="text" name="mobileNo" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>