<?php

    $velocidad = $_POST['velocidad'];
    $tiempo = $_POST['tiempo'];

    $multi = $velocidad * $tiempo;

    echo  "La distancia es: ".$multi. " metros";



?>