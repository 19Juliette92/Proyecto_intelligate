<?php

$conexion = mysqli_connect("localhost:3307", "root", "", "intelligate")
    or die("Problemas con la conexión");

// $email = $_POST['email'];
$correonuevo = $_POST['correonuevo'];
$correoviejo = $_POST['correoviejo'];
$consulta = "UPDATE usuarios SET email='$correoviejo' WHERE email='$correonuevo'";

$registros = mysqli_query($conexion, $consulta);

echo "Consulta SQL: $consulta<br>";

if ($registros) {
    echo "El correo fue modificado con éxito";
} else {
    echo "Hubo un error al intentar modificar el correo: " . mysqli_error($conexion);
}
?>