<?php include("../db.php"); ?>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();
    
    header("Location: index.php");
}

$userToEdit = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM users WHERE id = $id");
    $userToEdit = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Demo</title>
</head>
<body>
    <h2>Update User</h2>
    
    <?php if ($userToEdit): ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $userToEdit['id']; ?>">
        <input type="text" name="name" value="<?php echo $userToEdit['name']; ?>" required>
        <input type="email" name="email" value="<?php echo $userToEdit['email']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
    <?php endif; ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td><a href='?edit={$row['id']}'>Edit</a></td>
            </tr>";
        }
        ?>
    </table>
    <br>
    <a href="../index.php">Back to Home</a>
</body>
</html>
