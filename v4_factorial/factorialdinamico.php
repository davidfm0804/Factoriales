<html>
    <body>
        <?php
            function factorial(){
                $j=0;
                for($i=0;$i<=10;$i++){
                    $f[$i]=1;
                    for($j=$i;$j>0;$j--){
                        $f[$i]=$f[$i]*$j; 
                    }
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$f[$i]."</td>";
                        echo "<tr>";
                }
                for($i=0;$i<count($f);$i++){
                    echo "".$f[$i]." ";
                }
            } 
        ?>
    </body>
</html>