<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM producto WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['Nombre'];
        $descripcion = $row['Descripcion'];
        $precio = $row['Precio'];
        $cantidad = $row['Cantidad'];
    } else {
        echo "No se encontró ningún producto con el ID proporcionado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <h2>Actualizar Producto</h2>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="<?php echo $precio; ?>">

        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" value="<?php echo $cantidad; ?>">

        <input type="submit" value="Actualizar">
    </form>

    <?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : '';

    // Preparar la consulta SQL para actualizar los datos del producto
    $sql = "UPDATE producto SET Nombre='$nombre', Descripcion='$descripcion', Precio='$precio', Cantidad='$cantidad' WHERE id=$id";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>
