<?php
include '../includes/header.php';
include '../includes/db.php';
include '../includes/functions.php';

checkLogin();

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h2>Ordine #" . $row['id'] . "</h2>";
    echo "<p>Totale: €" . $row['total'] . "</p>";
    echo "<p>Data: " . $row['created_at'] . "</p>";
    echo "</div>";
}

include '../includes/footer.php';
?> 