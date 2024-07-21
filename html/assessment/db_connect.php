<?php
$servername = "localhost";
$username = "root";  // Use your MySQL username
$password = "password";      // Use your MySQL password
$dbname = "school_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
