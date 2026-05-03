<?php
$name = $_POST['name'];
$email = $_POST['email'];
echo "Hello, " . htmlspecialchars($name) . "! Your email is " . htmlspecialchars($email);
?>