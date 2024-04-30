<?php
include_once 'config.php';

$id = $_POST['id'];
$nuevo_telefono = $_POST['nuevo_telefono'];

$sql = "UPDATE Usuarios SET Telefono='$nuevo_telefono' WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    echo "¡Actualización exitosa!";
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();
?>
