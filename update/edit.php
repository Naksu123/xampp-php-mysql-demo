<?php include '../db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$data = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();

    header("Location: index.php");
}

?>
<h2> Update User </h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $data['name'] ?>"><br>
    Email: <input type="text" name="email" value="<?= $data['email'] ?>"><br>
    <button name="update">Update</button>
</form>

