<?php
session_start();
include 'includes/header.php';
include 'includes/db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            redirect('views/user_dashboard.php');
        } else {
            echo "Password errata.";
        }
    } else {
        echo "Nessun utente trovato.";
    }
}
?>

<div class="container">
    <h1>Benvenuto nel CMS</h1>
    <p>Questa è la pagina principale del CMS.</p>
    <a href="register.php" class="btn btn-primary">Registrati</a>

    <!-- Form di login -->
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<?php
include 'includes/footer.php';
?> 