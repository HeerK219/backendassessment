<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO Parents (FirstName, LastName, Address, Email, Phone) VALUES ('$firstName', '$lastName', '$address', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New parent record created successfully.</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Parent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Parent</h1>
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
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
            <input type="submit" value="Add Parent">
        </form>
    </div>
</body>
</html>
