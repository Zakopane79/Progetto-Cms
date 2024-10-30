<?php
include '../includes/header.php';
include '../includes/db.php';
include '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = sanitizeInput($_POST['title']);
    $content = sanitizeInput($_POST['content']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $user_id);

    if ($stmt->execute()) {
        echo "Post creato con successo.";
    } else {
        echo "Errore nella creazione del post.";
    }
}
?>

<!-- Form per creare un nuovo post -->
<form method="post" action="">
    <input type="text" name="title" placeholder="Titolo" required>
    <textarea name="content" placeholder="Contenuto" required></textarea>
    <button type="submit">Crea Post</button>
</form>

<?php
include '../includes/footer.php';
?> 