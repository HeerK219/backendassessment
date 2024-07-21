<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $annualSalary = $_POST['annual_salary'];
    $backgroundCheck = isset($_POST['background_check']) ? 1 : 0;

    $sql = "INSERT INTO Teachers (FirstName, LastName, Address, Phone, AnnualSalary, BackgroundCheck) VALUES ('$firstName', '$lastName', '$address', '$phone', '$annualSalary', '$backgroundCheck')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New teacher record created successfully.</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Teacher</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <form action="" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
            <label for="annual_salary">Annual Salary:</label>
            <input type="number" id="annual_salary" name="annual_salary" step="0.01" required>
            <label for="background_check">Background Check:</label>
            <input type="checkbox" id="background_check" name="background_check">
            <input type="submit" value="Add Teacher">
        </form>
    </div>
</body>
</html>
