<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $classID = $_POST['class_id'];

    $sql = "INSERT INTO TeachingAssistants (FirstName, LastName, Address, Phone, ClassID) VALUES ('$firstName', '$lastName', '$address', '$phone', '$classID')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New teaching assistant record created successfully.</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Teaching Assistant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Teaching Assistant</h1>
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
            <label for="class_id">Class ID:</label>
            <input type="number" id="class_id" name="class_id" required>
            <input type="submit" value="Add Teaching Assistant">
        </form>
    </div>
</body>
</html>
