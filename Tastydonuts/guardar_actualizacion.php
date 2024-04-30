<?php
include('conexion.php');

// Recibir datos del formulario
$id = $_POST['id'];
$nombre_cliente = $_POST['nombre_cliente'];
$topping = $_POST['topping'];
$sabor = $_POST['sabor'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

// Actualizar datos en la base de datos
$query = "UPDATE pedido SET nombre_cliente = '$nombre_cliente',topping = '$topping',sabor = '$sabor', cantidad = $cantidad, precio = $precio WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

// Verificar si la actualización fue exitosa
if ($resultado) {
    header("Location: index.php");
} else {
    echo "Error al guardar los cambios: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
