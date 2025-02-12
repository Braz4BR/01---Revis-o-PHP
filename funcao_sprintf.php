<?php 
    $valor1 = 37.8912;
    $valor2 = 664.9034;
    $valor3 = $valor1+$valor2;

    echo $valor3;
    echo "<br>\n";
    
    #provavelmente é a msm coisa que o printf com %.2f
    $variavelTratada = sprintf("%01.2f", $valor3);

    echo $variavelTratada;
?>