<?php

    $Edad = $_POST['edad'];
    $sexo = $_POST['sexo'];   
    
    if($sexo=="Masculino"){
        if($Edad>=63){
            echo "se se puede jubilar";
        }else{
            echo "no jubilado";
        }
    }else{
        if($sexo=="Femenino"){
            if($Edad>54){
                echo "se se puede jubilar";
            }else{
                echo "no jubilado";
            }
        }
    }

?>