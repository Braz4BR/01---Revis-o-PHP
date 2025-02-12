<?php 
    for($x=1; $x <=10; $x++){
        if($x == 5){
            printf("%d <-- Chegou no cinco.<br>",$x);
            continue;
        }
        echo"$x <br>";
    }
?>