<?php include("db.php");

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['email']}</td>
    </tr>";
}
?>