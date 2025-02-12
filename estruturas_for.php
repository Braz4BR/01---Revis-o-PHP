<?php 
    echo "Exemplo 01 <br>";
    for($x=1; $x <= 10; $x++){
        echo "$x<br>";
    }

    echo "<br>";

    echo "Exemplo 02<br>";
    for($x=10;$x >=1;$x--){
        echo"$x<br>";
    }

    echo "<br>";
    
    echo"Exemplo 03<br>";
    for($x=1;;$x++){
        echo "$x <br>";
        if ($x==10){break;}
    }
?>