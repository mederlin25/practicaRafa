<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Producto</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <br>
    <h2>Datos de Productos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
        <?php
        include_once 'config.php';

        
        $sql = "SELECT * FROM producto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Descripcion'] . "</td>";
                echo "<td>" . $row['Precio'] . "</td>";
                echo "<td>" . $row['Cantidad'] . "</td>";

                echo "<td>";
                echo "<form action='actualizar.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<input type='text' name='nuevo_nombre' placeholder='Nuevo nombre'>";
                echo "<input type='text' name='nueva_descripcion' placeholder='Nueva descripcion'>";
                echo "<input type='text' name='nuevo_precio' placeholder='Nuevo precio'>";
                echo "<input type='text' name='nueva_cantidad' placeholder='Nueva cantidad'>";
                echo "<input type='submit' value='Actualizar'>";
                echo "</form>";
                echo "<form action='borrar.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<input type='submit' value='Borrar'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron datos</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
