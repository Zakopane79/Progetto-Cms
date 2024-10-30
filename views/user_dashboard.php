<?php
include '../includes/header.php';
include '../includes/db.php';
include '../includes/functions.php';

checkLogin();

$userData = getUserData($conn, $_SESSION['user_id']);

echo "<h1>Benvenuto, " . $userData['username'] . "</h1>";
echo "<p>Email: " . $userData['email'] . "</p>";

// Mostra attività recenti
echo "<h2>Attività Recenti</h2>";
// Codice per mostrare attività recenti

include '../includes/footer.php';
?> 