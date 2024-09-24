<?php
    require('funcion_factorial.php');
    $i=$_GET["numero"];
    $num=$_GET["numero2"];;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/factorial.css">
        <title>Factorial del numero1 al numero2</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Numero</th>
                <th>Factorial</th>  
            </tr>
        <?php
           factorial($i,$num);
        ?>
        </table>
    </body>
</html> 