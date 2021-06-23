<?php 
    $conexion = mysqli_connect("localhost", "root", "", "registro_usuarios");

    $conexion->set_charset("utf8");
    if(!$conexion) {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    } else {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    }
?>

