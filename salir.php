<?php
    if($_GET['exit']=='si'){
        session_start();
        session_destroy();
        header("Location:formulario.php");
    }
?>