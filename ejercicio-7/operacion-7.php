<?php

    $nombreE = $_POST['nombreE'];
    $asignatura = $_POST['asignatura'];   
    $calificaionf = $_POST['cfinal'];


    if($calificaionf<7){
        echo "Aprendiz: ".$nombreE. ",".$calificaionf ." " ."Desaprobado";
    }else{
        echo "Aprendiz: ".$nombreE. ",". $calificaionf. " "."Aprobado";
    }





?>