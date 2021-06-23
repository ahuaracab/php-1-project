<?php
    include ("conexion.php");

    /*$query = "INSERT INTO registros(rut, nombre, apellido, email, contraseña)
    #VALUES ('12332132KAD', 'Pedro', 'Gonzales', 'pgonza@gmail.com', 'PAS1234')";

    $ejecutar = mysqli_query($conexion, $query) or die('Error al insertar datos!');
    echo "Se insertaron los datos correctamente!"

    $query = "UPDATE registros SET nombre = 'Pablo', apellido = 'Perez' WHERE rut='12332132KAD'";
    $ejecutar = mysqli_query($conexion, $query) or die('No se encontraron los datos!');
    echo "Se actualizaron los datos correctamente!";

    $query = "DELETE FROM registros WHERE rut='12332132KAD'";
    $ejecutar = mysqli_query($conexion, $query) or die('No se encontraron los datos!');
    echo "Se eliminaron los datos correctamente!";*/

    $query = "SELECT * FROM registros WHERE rut LIKE '%12332%'";
    $ejecutar = mysqli_query($conexion, $query) or die('No se encontraron los datos!');
    echo "Consulta exitosa! <br/><br/>";
    while($result = mysqli_fetch_assoc($ejecutar)){
        echo $result['rut']." - ".$result["nombre"]." - ".$result["apellido"]." - ".$result["email"]."<br/>";
    }
?>