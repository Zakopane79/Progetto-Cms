<?php
include '../includes/header.php';
include '../includes/db.php';

$result = $conn->query("SELECT * FROM products");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h2>" . $row['name'] . "</h2>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<p>Prezzo: €" . $row['price'] . "</p>";
    echo "</div>";
}

include '../includes/footer.php';
?> 