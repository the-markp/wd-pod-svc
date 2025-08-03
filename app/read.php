<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM users");
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
}
echo "</table>";
?>
