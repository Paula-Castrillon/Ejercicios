<?php

    $Nombre = $_POST['nombreE'];
    $Asignatura = $_POST['asignatura'];
    $examen1 = $_POST['1E'];
    $examen2 = $_POST['2E'];   
    $examen3 = $_POST['3E'];

    $nf1 = $examen1 * 0.30;
    $nf2 = $examen2 * 0.30;
    $nf3 = $examen3 * 0.40;

    $suma = $nf1 + $nf2 + $nf3;
    
    if ($suma >= 4.0) {

echo "su promedio es de: ".$suma." po lo tanto apruebas ".$Asignatura;    
}else{
    echo "su promedio es de: ".$suma." po lo tanto NO apruebas ".$Asignatura;       }

    ?>