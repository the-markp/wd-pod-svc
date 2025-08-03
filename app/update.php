<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $email, $id]);
    echo "User updated successfully.";
}
?>

<form method="post">
    ID: <input type="number" name="id" required><br>
    New Name: <input type="text" name="name" required><br>
    New Email: <input type="email" name="email" required><br>
    <input type="submit" value="Update">
</form>
