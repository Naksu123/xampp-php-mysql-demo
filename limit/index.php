<?php include("../db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Limit Demo</title>
</head>
<body>
    <h2>SQL LIMIT Demo</h2>
    <p>Showing only the first 5 users using <code>LIMIT 5</code></p>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users LIMIT 5");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
            </tr>";
        }
        ?>
    </table>
    <br>
    <a href="../index.php">Back to Home</a>
</body>
</html>
