<?php 
    $hora = 5;
        if($hora > 6 & $hora <=12){
            echo ("Bom dia!");
        }elseif($hora > 12 & $hora <=18){
            echo ("Boa tarde!");
        }elseif($hora > 18 & $hora <= 24){
            echo("Boa Noite!");
        }else{
            echo("Bons sonhos mimimimim");
        }
?>