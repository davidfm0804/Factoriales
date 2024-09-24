<?php
require 'calcular_factorial.php'
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/factorial.css">
        <title>Factorial del 1 al 10</title>
    </head>
    <body>
        <?php
            for($i=0;$i<10;$i++){
                $array[$i]=calcularFactorial($i);
            }
            print_r($array);
            for($i=0;$i<count($array);$i++){
                echo "".$array[$i]." ";
            }
        ?>
    </body>
</html> 