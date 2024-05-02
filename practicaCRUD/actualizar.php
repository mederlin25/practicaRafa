<?php
include_once 'config.php';

$id = $_POST['id'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

// Inicializamos la parte de la consulta SQL para asignar valores
$sql_update = "UPDATE Usuarios SET ";

// Inicializamos un array para almacenar los pares campo=valor a actualizar
$update_values = array();

// Verificamos si se han enviado los campos y los agregamos a la consulta
if(!empty($nombre)) {
    $update_values[] = "Nombre='$nombre'";
}
if(!empty($email)) {
    $update_values[] = "Email='$email'";
}
if(!empty($contraseña)) {
    $update_values[] = "Contraseña='$contraseña'";
}
if(!empty($direccion)) {
    $update_values[] = "Direccion='$direccion'";
}
if(!empty($telefono)) {
    $update_values[] = "Telefono='$telefono'";
}

// Combinamos todos los pares campo=valor en una sola cadena separada por comas
$update_string = implode(", ", $update_values);

// Combinamos la parte de la consulta SQL con los valores a actualizar
$sql = $sql_update . $update_string . " WHERE Id=$id";

if (!empty($update_values)) {
    if ($conn->query($sql) === TRUE) {
        echo "¡Actualización exitosa!";
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
} else {
    echo "No se han proporcionado datos para actualizar.";
}

$conn->close();
?>
