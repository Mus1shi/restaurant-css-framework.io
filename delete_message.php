<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);

    $conn = new mysqli('localhost', 'root', '', 'restaurant');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: backoffice.php");
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
