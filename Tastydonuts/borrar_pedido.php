<?php
include('conexion.php');

// Obtener el ID del pedido a borrar
$id = $_GET['id'];

// Borrar el pedido de la base de datos
$query = "DELETE FROM pedido WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

// Verificar si el borrado fue exitoso
if ($resultado) {
    header("Location: index.php");
} else {
    echo "Error al borrar el pedido: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
