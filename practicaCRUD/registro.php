<?php
include_once 'config.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO Usuarios (Nombre, Email, Contraseña, Direccion, Telefono) VALUES ('$nombre', '$email', '$contraseña', '$direccion', '$telefono')";

$conn->query($sql); 

header("Location: index.php");
exit();
?>

