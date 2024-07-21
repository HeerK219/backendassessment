<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $medicalInfo = $_POST['medical_info'];
    $classID = $_POST['class_id'];

    $sql = "INSERT INTO Pupils (FirstName, LastName, DOB, Address, MedicalInfo, ClassID) VALUES ('$firstName', '$lastName', '$dob', '$address', '$medicalInfo', '$classID')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New pupil record created successfully.</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Pupil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Pupil</h1>
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
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            <label for="medical_info">Medical Information:</label>
            <textarea id="medical_info" name="medical_info"></textarea>
            <label for="class_id">Class ID:</label>
            <input type="number" id="class_id" name="class_id" required>
            <input type="submit" value="Add Pupil">
        </form>
    </div>
</body>
</html>
