<?php

    $hermano1 = $_POST['edad1'];
    $hermano2 = $_POST['edad2'];

    if($hermano1>$hermano2){
        $Edades = $hermano1 - $hermano2;        
        echo $hermano1." la diferencia es: ".$Edades;
            
    }else{
        $Edades = $hermano2 - $hermano1; 
        echo $hermano2." la diferencia es: ".$Edades;
      }
?>