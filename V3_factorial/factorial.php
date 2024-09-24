<html>
    <body>
        <table>
                <tr>
                    <th>Numero</th>
                    <th>Factorial</th>  
                </tr>
        <?php
            //$num=7;
            $num=$_GET["numero"];
            $num2=$_GET["numero2"];
            $j=0;
            for($i=$num;$i<=$num2;$i++){
                $f[$i]=1;
                for($j=$i;$j>0;$j--){
                    $f[$i]=$f[$i]*$j; 
                }
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$f[$i]."</td>";
                    echo "<tr>";
            }
        ?>
         </table>
        <a href="formulario1.html">formulario</a>
    </body>
</html>