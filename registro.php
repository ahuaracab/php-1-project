<?php
    include ("conexion.php");

    if($_POST['contrasena1'] == $_POST['contrasena2']){
        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contraseña = md5($_POST['contrasena2']);
        
        $query = "INSERT INTO registros(rut, nombre, apellido, email, contraseña)
        VALUES ('$rut', '$nombre', '$apellido', '$email', '$contraseña')";

        $ejecutar = mysqli_query($conexion, $query) or die('No se pudo crear el registro!');

        header("Location:formulario.php?valida=si");
    } else {
        header("Location:formulario.php?valida=no");
    }
?>