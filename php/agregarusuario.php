<?php

$conexion = mysqli_connect("localhost:3307", "root", "", "intelligate") 
    or die("Problemas con la conexión");

    $idUsuario = $_POST["id_usuario"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];    
    $apartamento = $_POST["apartamento"];
    $registroHuella = $_POST["registro_huella"];


    $query = "INSERT INTO usuarios (id_usuario, nombre, apellido, genero, email, apartamento)
    VALUES ('$idUsuario', '$nombre', '$apellido', '$genero', '$email', '$apartamento')";
    
    if (mysqli_query($conexion, $query)){
        echo '<script>
            alert("Usuario fue registrado correctamente");
            window.location.href = "../pages/agregarusuario.html";
          </script>';
        exit();
    }else{
        echo"error al insertar los datos" . mysqli_error($conexion);
    }

    mysqli_close($conexion);

?>