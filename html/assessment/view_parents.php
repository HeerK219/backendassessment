<?php
include 'db_connect.php';

$sql = "SELECT * FROM Parents";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Parents</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Parents</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>ParentID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['ParentID']}</td>
                            <td>{$row['FirstName']}</td>
                            <td>{$row['LastName']}</td>
                            <td>{$row['Address']}</td>
                            <td>{$row['Email']}</td>
                            <td>{$row['Phone']}</td>
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
<?php
include 'db_connect.php';

$sql = "SELECT * FROM Parents";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Parents</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Parents</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>ParentID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['ParentID']}</td>
                            <td>{$row['FirstName']}</td>
                            <td>{$row['LastName']}</td>
                            <td>{$row['Address']}</td>
                            <td>{$row['Email']}</td>
                            <td>{$row['Phone']}</td>
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
