<?php
include 'db_connect.php';

$sql = "SELECT * FROM TeachingAssistants";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Teaching Assistants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Teaching Assistants</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>AssistantID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Class ID</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['AssistantID']}</td>
                            <td>{$row['FirstName']}</td>
                            <td>{$row['LastName']}</td>
                            <td>{$row['Address']}</td>
                            <td>{$row['Phone']}</td>
                            <td>{$row['ClassID']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>