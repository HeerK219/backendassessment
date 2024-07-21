<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];

    $sql = "INSERT INTO Books (Title) VALUES ('$title')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New book record created successfully.</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Book</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <form action="" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <input type="submit" value="Add Book">
        </form>
    </div>
</body>
</html>
