<?php
// Datos de conexión a la base de datos
$host = "localhost"; // Si estás usando un servidor local, puede ser "localhost"
$usuario = "root"; // Cambia esto por tu usuario de MySQL
$contrasena = ""; // Cambia esto por tu contraseña de MySQL
$base_datos = "pedido"; // Cambia esto por el nombre de tu base de datos

// Conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
