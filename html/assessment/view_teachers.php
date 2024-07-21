<?php
include 'db_connect.php';

$sql = "SELECT * FROM Teachers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Teachers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Teachers</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>TeacherID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Annual Salary</th>
                <th>Background Check</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['TeacherID']}</td>
                            <td>{$row['FirstName']}</td>
                            <td>{$row['LastName']}</td>
                            <td>{$row['Address']}</td>
                            <td>{$row['Phone']}</td>
                            <td>{$row['AnnualSalary']}</td>
                            <td>" . ($row['BackgroundCheck'] ? 'Yes' : 'No') . "</td>
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
