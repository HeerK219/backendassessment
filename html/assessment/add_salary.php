<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacherID = $_POST['teacher_id'];
    $salaryAmount = $_POST['salary_amount'];

    $sql = "INSERT INTO Salaries (TeacherID, SalaryAmount) VALUES ('$teacherID', '$salaryAmount')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New salary record created successfully.</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Salary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Salary</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <form action="" method="post">
            <label for="teacher_id">Teacher ID:</label>
            <input type="number" id="teacher_id" name="teacher_id" required>
            <label for="salary_amount">Salary Amount:</label>
            <input type="number" id="salary_amount" name="salary_amount" step="0.01" required>
            <input type="submit" value="Add Salary">
        </form>
    </div>
</body>
</html>
