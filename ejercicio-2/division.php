<?php

    $estudiantes = $_POST['estudiante'];
    $asignatura = $_POST['asignatura'];   
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $suma = ($nota1 + $nota2 + $nota3) / 3;

    echo  $estudiantes. ",". " " .$asignatura. " " ."El promedio es". " ". $suma  ; 


?>