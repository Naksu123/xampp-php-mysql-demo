<?php include '../db.php'; ?>

<h2>LIMIT Demo (5 Records Only)</h2>

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