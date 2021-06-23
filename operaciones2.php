<!DOCTYPE html>
<html>
<head>
    <title> Insertar PHP en código HTML </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="Contenedor">
            <h1>Funciones y estructuras de control en PHP</h1>
        <div class="izquierda">
        <?php
        
            function operaciones($var1, $var2, $var3){
            
                $resultado = 0;
                if($var2 == "+"){
                    $resultado = $var1 + $var3;
                    echo  "El resultado de: $var1 + $var3 = ";
                
                }else if($var2 == "-"){
                    $resultado = $var1 - $var3;
                    echo  "El resultado de: $var1 - $var3 = ";
                
                }else if($var2 == "/"){
                    $resultado = $var1 / $var3;
                    echo  "El resultado de: $var1 / $var3 = ";
                }
                return $resultado;    
            }
        
            $r = operaciones(12, "/", 3);
            echo "$r </br></br>";
        
        ?> 
        </div>
        <div class="centro">
            <?php
                $r2 = operaciones(20, "-", 4);
                echo "$r2 </br></br>";
                
            ?>
        </div>
        <div class="derecha">
            <?php
                $r3 = operaciones($r, "+", $r2);
                echo "$r3 </br></br>";
                
            ?>
        </div>
    </div>
        
</body>
</html>