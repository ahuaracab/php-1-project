<!DOCTYPE html>
<html>
<head>
    <title> Insertar PHP en código HTML </title>
    <meta charset="utf-8">
</head>
<body>
<?php
    $norte = 5;
    $sur = 6;
    $centro = 4;
    $total_regiones = $norte + $centro + $sur;
    $texto = "Chile está dividido en: ";

    echo "$texto $total_regiones regiones </br></br>";
    echo "$norte en el norte. <br/> $sur en el sur. <br/> $centro en el centro."
?>
  
    
</body>
</html>