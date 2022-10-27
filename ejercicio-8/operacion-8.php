<?php

    $Edad = $_POST['edad'];
    $sexo = $_POST['sexo'];   
    
    if($sexo=="Masculino"){
        if($Edad>=63){
            echo "Si se puede jubilar";
        }else{
            echo "No se puede jubilar";
        }
    }else{
        if($sexo=="Femenino"){
            if($Edad>54){
                echo "Si se puede jubilar";
            }else{
                echo "No se puede jubilar";
            }
        }
    }

?>