<?php
include 'db_connect.php';

$sql = "SELECT * FROM Books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Books</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>BookID</th>
                <th>Title</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['BookID']}</td>
                            <td>{$row['Title']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
<?php
include 'db_connect.php';

$sql = "SELECT * FROM Books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Books</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>BookID</th>
                <th>Title</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['BookID']}</td>
                            <td>{$row['Title']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
<?php
include 'db_connect.php';

$sql = "SELECT * FROM Books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Books</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>BookID</th>
                <th>Title</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['BookID']}</td>
                            <td>{$row['Title']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
<?php
include 'db_connect.php';

$sql = "SELECT * FROM Books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Books</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="container">
        <table>
            <tr>
                <th>BookID</th>
                <th>Title</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['BookID']}</td>
                            <td>{$row['Title']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
