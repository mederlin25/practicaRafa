<?php
include_once 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM Usuarios WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    echo "¡Borrado exitoso!";
} else {
    echo "Error al borrar: " . $conn->error;
}

$conn->close();
?>
