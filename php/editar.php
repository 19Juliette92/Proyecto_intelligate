<?php

$conexion = mysqli_connect("localhost:3307", "root", "", "intelligate")
    or die("Problemas con la conexión");

$email = $_POST['email'];

$registros = mysqli_query($conexion, "SELECT email FROM usuarios WHERE email='$email'")
    or die("Problemas en el select :" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)){

    ?>
        <form action="../php/editarCorreo.php" method="post">
            Ingrese nuevo correo:
            <input type="text" name="correonuevo" value="<?php echo $reg['email']?>">
            <br>
            <input type=" hidden" name="correoviejo" value="<?php echo $reg['email']?>">
            <input type="submit" value ="Modificar">
        </form>
        <?php
}
else
echo "No existe alumno con dicho correo";
?>