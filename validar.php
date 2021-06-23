<?php
    include ("conexion.php");

    $usuario = $_POST['usuario'];
    $pass = md5($_POST['pass']);

    $query = "SELECT * FROM registros WHERE rut = '$usuario' AND contraseña = '$pass'";
    $ejecutar = mysqli_query($conexion, $query);

    $result = mysqli_num_rows($ejecutar);
    if ($result > 0){
        /*while($registro = mysqli_fetch_assoc($ejecutar)){
            echo $registro['rut']." - ".$registro["nombre"]." - ".$registro["apellido"]." - ".$registro["email"]."<br/>";
        }*/
        session_start();
        $_SESSION['activo'] = true;
        $_SESSION['usuario'] = $usuario;

        if($usuario == '153412977'){
            header("Location:eliminar.php");
        } else if ($usuario == '132497123'){
            header("Location:modificar.php");
        } else if ($usuario == '91273320'){
            header("Location:mostrar.php");
        }

    } else {
        header("Location:formulario.php?error=si");
    }
?>