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
    <h2>Registrar nuevo usuario</h2> <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion"><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono"><br>

        <input type="submit" value="Registrar">
    </form>

    <div class="container">
     <a href="pagina_datos.php">Ver datos de usuarios</a>
    </div>

</body>
</html>
