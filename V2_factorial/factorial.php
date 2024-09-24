<html>
    <body>
        <?php
            //$num=7;
            $num=$_GET[numero];
            $f=1;
            for($i=$num;$i>0;$i--){
                $f=$f*$i;
            }
            echo "El Factorial de ".$num." es ".$f;
        ?>
        <a href="formulario1.html">formulario</a>
    </body>
</html>