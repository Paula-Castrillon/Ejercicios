<?php
    $Ganados = $_POST['Ganados'];
    $Empatados = $_POST['Empatados'];
    $Perdidos = $_POST['Perdidos'];   

    $PGanados = $Ganados * 3;
    $PEmpatados = $Empatados * 1;
    $PPerdidos = $Perdidos * 0;
    
    $suma = ($PGanados + $PEmpatados + $PPerdidos);


    echo "Total de puntos=". " " . $PGanados." ". "+"." ".$PEmpatados." ". "+"." ".$PPerdidos." ". "=".$suma ;

?>