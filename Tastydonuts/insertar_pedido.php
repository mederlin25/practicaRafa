<?php
include('conexion.php');

// Recibir datos del formulario
$nombre_cliente = $_POST['nombre_cliente'];
$topping = $_POST['topping'];
$sabor = $_POST['sabor'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

// Insertar datos en la base de datos
$query = "INSERT INTO pedido (nombre_cliente, topping, sabor, cantidad, precio) VALUES ('$nombre_cliente','$topping','$sabor', $cantidad, $precio)";
$resultado = mysqli_query($conexion, $query);

// Verificar si la inserción fue exitosa
if ($resultado) {
    header("Location: index.php");
} else {
    echo "Error al agregar el pedido: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
