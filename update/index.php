<?php

use LDAP\Result;

 include '../db.php'; ?>

<h2> Demo Update </h2>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td><a href='edit.php?id={$row['id']}'>Update</a></td>
</tr>";
}
?>
</table>
<br>
<a href="../index.php">Back to Home</a>