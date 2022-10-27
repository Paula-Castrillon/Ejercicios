<?php

    $volantes = $_POST['volantes'];
    $posters = $_POST['posters'];
    $tdpresen = $_POST['tdpresen'];

    $Vvolantes = $volantes *2000;
    $Vposters = $posters * 5000;
    $Vtdpresen = $tdpresen *500;

    $suma = ($Vvolantes + $Vposters + $Vtdpresen);

    echo "Valor volantes: ".$Vvolantes."," ."Valor posters:  ". $Vposters.","  ."Valor tarjetas: ". $Vtdpresen."," ." ". "El total a pagar es:"." ". $suma;
?>