<?php
include 'db_connect.php';

$sql = "SELECT * FROM Pupils";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Pupils</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Pupils</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>PupilID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Medical Info</th>
                <th>Class ID</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['PupilID']}</td>
                            <td>{$row['FirstName']}</td>
                            <td>{$row['LastName']}</td>
                            <td>{$row['DOB']}</td>
                            <td>{$row['Address']}</td>
                            <td>{$row['MedicalInfo']}</td>
                            <td>{$row['ClassID']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
