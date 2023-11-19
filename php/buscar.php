    <?php

    $conexion = mysqli_connect("localhost:3307", "root", "", "intelligate")
        or die("Problemas con la conexión");

    $idUsuario = $_POST['idUsuario'];

    $registros = mysqli_query($conexion, "SELECT id_usuario, nombre, apellido, genero, email, apartamento FROM usuarios WHERE id_usuario = '$idUsuario'")
        or die("Problemas en el select :" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        echo "Id usuario:" . $reg['id_usuario'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Apellido:" . $reg['apellido'] . "<br>";
        echo "Género:" . $reg['genero'] . "<br>";
        echo "Email:" . $reg['email'] . "<br>";
        echo "Apartamento:" . $reg['apartamento'];

        switch ($reg['genero']) {
            case "Masculino":
                echo "Género: Masculino";
                break;
            case "Femenino":
                echo "Género: Femenino";
                break;
            case "Otros":
                echo "Género: Otros";
                break;
        }
        echo "<br><br>";
    }

    mysqli_close($conexion);

    ?>
