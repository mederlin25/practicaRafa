<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos de producto</title>
</head>
<body>
    <h2>Selecciona un producto para actualizar:</h2>

    <form id="formulario">
        <label for="productos">Selecciona un producto:</label>
        <select name="productos" id="productos" onchange="mostrarDetalle()">
            <option value="">Selecciona un producto...</option>
            <!-- Aquí deberías llenar las opciones con los productos disponibles en tu base de datos -->
            <!-- Por simplicidad, aquí se muestra un ejemplo estático -->
            <option value="1">Producto 1</option>
            <option value="2">Producto 2</option>
            <option value="3">Producto 3</option>
        </select>

        <br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" readonly>

        <br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" readonly>

        <br><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" readonly>

        <br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" readonly>

        <br><br>

        <button type="button" onclick="habilitarEdicion()">Editar</button>
        <button type="submit" id="btnActualizar" style="display: none;">Actualizar</button>
    </form>

    <script>
        function mostrarDetalle() {
            var id = document.getElementById('productos').value;

            // Realizar una solicitud AJAX para obtener los detalles del producto
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Si la solicitud se realizó correctamente, actualizar los campos con los datos del producto
                        var producto = JSON.parse(xhr.responseText);
                        document.getElementById('nombre').value = producto.nombre;
                        document.getElementById('descripcion').value = producto.descripcion;
                        document.getElementById('precio').value = producto.precio;
                        document.getElementById('cantidad').value = producto.cantidad;

                        // Habilitar el botón de actualizar
                        document.getElementById('btnActualizar').style.display = 'inline';
                    } else {
                        // Si hubo un error en la solicitud, mostrar un mensaje de error
                        console.error('Error al obtener los detalles del producto. Código de estado: ' + xhr.status);
                    }
                }
            };
            xhr.open('GET', 'obtener_producto.php?id=' + id, true);
            xhr.send();
        }

        function habilitarEdicion() {
            // Habilitar la edición de los campos
            document.getElementById('nombre').readOnly = false;
            document.getElementById('descripcion').readOnly = false;
            document.getElementById('precio').readOnly = false;
            document.getElementById('cantidad').readOnly = false;

            // Cambiar el texto del botón de "Editar" a "Cancelar"
            document.getElementsByTagName('button')[0].textContent = 'Cancelar';

            // Mostrar el botón de "Actualizar"
            document.getElementById('btnActualizar').style.display = 'inline';
        }
    </script>
</body>
</html>
