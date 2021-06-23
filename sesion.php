<?php
    session_start();

    if(!$_SESSION['activo']){
        header("Location:salir.php?exit=si");
    }
?>