<?php
include('conexion.php');

// Obtener el ID del pedido a actualizar
$id = $_GET['id'];

// Obtener los datos del pedido
$query = "SELECT * FROM pedido WHERE id = $id";
$resultado = mysqli_query($conexion, $query);
$pedido = mysqli_fetch_assoc($resultado);

// Mostrar el formulario con los datos del pedido para actualizar
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pedido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Actualizar Pedido</h1>
    <form action="guardar_actualizacion.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $pedido['id']; ?>">
        <label for="nombre_cliente">Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" value="<?php echo $pedido['nombre_cliente']; ?>" min="1" required><br><br>
        <label for="topping">Topping:</label>
        <input type="text" id="topping" name="topping" value="<?php echo $pedido['topping']; ?>" min="1" required><br><br>
        <label for="sabor">Sabor:</label>
        <input type="text" id="sabor" name="sabor" value="<?php echo $pedido['sabor']; ?>" required><br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="<?php echo $pedido['cantidad']; ?>" min="1" required><br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="<?php echo $pedido['precio']; ?>" step="0.01" min="0.01" required><br><br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
<?php
mysqli_close($conexion);
?>
