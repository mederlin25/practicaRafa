<?php
include_once 'config.php';

$id = $_POST['id'];

// Preparar la consulta SQL con una sentencia preparada
$sql = "DELETE FROM producto WHERE Id=?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Vincular el parámetro
$stmt->bind_param("i", $id);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "¡Borrado exitoso!";
} else {
    echo "Error al borrar: " . $conn->error;
}

// Cerrar la conexión y liberar los recursos
$stmt->close();
$conn->close();
?>
