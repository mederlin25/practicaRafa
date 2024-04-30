<?php
include_once 'config.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO producto (id, nombre, descripcion, precio, cantidad) VALUES (0,'$nombre', '$descripcion', '$precio', '$cantidad')";

$conn->query($sql); 

header("Location: index.php");
exit();
?>

