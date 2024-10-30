<?php
include '../includes/header.php';
include '../includes/db.php';
include '../includes/functions.php';

session_start();

// Inizializza il carrello se non esiste
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Aggiungi un prodotto al carrello
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'] ?? 1;

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }
}

// Rimuovi un prodotto dal carrello
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
}

// Mostra i prodotti nel carrello
echo "<h1>Carrello</h1>";
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $stmt = $conn->prepare("SELECT name, price FROM products WHERE id = ?");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();

        echo "<div>";
        echo "<h2>" . $product['name'] . "</h2>";
        echo "<p>Prezzo: €" . $product['price'] . "</p>";
        echo "<p>Quantità: " . $quantity . "</p>";
        echo "<a href='cart.php?remove=" . $product_id . "'>Rimuovi</a>";
        echo "</div>";
    }
} else {
    echo "<p>Il carrello è vuoto.</p>";
}

include '../includes/footer.php';
?> 