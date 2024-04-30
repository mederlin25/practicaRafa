<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Usuarios</title>
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
    </style>
</head>
<body>
    <br>
    <h2>Datos de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php
        include_once 'config.php';

        
        $sql = "SELECT * FROM Usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Contraseña'] . "</td>";
                echo "<td>" . $row['Direccion'] . "</td>";
                echo "<td>" . $row['Telefono'] . "</td>";

                echo "<td>";
                echo "<form action='actualizar.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";
                echo "<input type='text' name='nuevo_telefono' placeholder='Nuevo teléfono'>";
                echo "<input type='submit' value='Actualizar'>";
                echo "</form>";
                echo "<form action='borrar.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";
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
