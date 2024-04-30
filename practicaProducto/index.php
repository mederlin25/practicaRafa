<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Donut's</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<br> <br>

    <form action="registro.php" method="post">
    <h2>Registrar producto</h2> <br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" required><br>

        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio" required><br>

        <label for="cantidad">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad"><br>

        <input type="submit" value="Registrar">
    </form>

    <div class="container">
     <a href="pagina_datos.php">Ver datos de productos</a>
    </div>

</body>
</html>
