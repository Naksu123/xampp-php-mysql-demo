<?php include("../db.php"); ?>

<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt ->bind_param("i", $id);
    $stmt->execute();

    header("Location: ../index.php");
}

?>

<h2> Delete Demo </h2>
<p> Are you sure you want to delete this user? </p>

<table>
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
    echo "<td><a href='?delete={$row['id']}'>Delete</a></td>
</tr>";
}
?>
</table>