<?php

    function mostrarTexto($texto) {
        echo "<strong>El texto a mostrar es el siguiente: </strong> $texto";
    }

    mostrarTexto("Me gusta mucho la web de aprenderaprogramar.com");

    $a = 4;
    $b = 4;

    if ($a>$b or $a==$b){
        echo "<p> a mayor que b </p>";
    }

?>