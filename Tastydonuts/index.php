<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pedidos de Donas</title>
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
</head>
<body>
    <h1>Gestión de Pedidos de Donas</h1>
    <h2>Realizar Pedido</h2>
    <form action="insertar_pedido.php" method="POST">
        <label for="npmbre_cliente">Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required><br><br>
        <label for="topping">Topping:</label>
        <input type="text" id="topping" name="topping" required><br><br>
        <label for="sabor">Sabor:</label>
        <input type="text" id="sabor" name="sabor" required><br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" min="0.01" required><br><br>
        <button type="submit">Agregar Pedido</button>
    </form>

    <h2>Pedidos Registrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Topping</th>
            <th>Sabor</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php
        include('conexion.php');
        $query = "SELECT * FROM pedido";
        $result = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre_cliente'] . "</td>";
            echo "<td>" . $row['topping'] . "</td>";
            echo "<td>" . $row['sabor'] . "</td>";
            echo "<td>" . $row['cantidad'] . "</td>";
            echo "<td>$" . $row['precio'] . "</td>";
            echo "<td><a href='actualizar_pedido.php?id=" . $row['id'] . "'>Actualizar</a> | <a href='borrar_pedido.php?id=" . $row['id'] . "'>Borrar</a></td>";
            echo "</tr>";
        }
        mysqli_close($conexion);
        ?>
    </table>
</body>
</html>
