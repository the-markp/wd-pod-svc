<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
    echo "User deleted successfully.";
}
?>

<form method="post">
    ID: <input type="number" name="id" required><br>
    <input type="submit" value="Delete">
</form>
