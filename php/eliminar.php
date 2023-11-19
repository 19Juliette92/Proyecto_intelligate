<?php

$conexion = mysqli_connect("localhost:3307", "root", "", "intelligate")
    or die("Problemas con la conexión");

$idUsuario = $_POST['idUsuario'];

$registros = mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE id_usuario = '$idUsuario'")
    or die("Problemas en el select :" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)){
    mysqli_query ($conexion, "DELETE FROM usuarios where id_usuario = '$idUsuario'") or
    die("Problemas en el select :" . mysqli_error ($conexion));
    echo "Se efectuó el borrado del alumno con el codigo digitado.";
}
else {
echo "No existe un alumno con ese codigo lo siento intente con otro.";
}
    
mysqli_close($conexion);


?>