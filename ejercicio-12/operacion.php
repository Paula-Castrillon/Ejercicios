<?php

    $vcapital = $_POST['vc'];
    $interes1 = $vcapital+($vcapital*0.02);
    $interes2 = $vcapital+($vcapital*0.045);
    $interes3 = $vcapital+($vcapital*0.07);

    if($vcapital<500){
        echo "Capital ingresado: ". $vcapital." valor a capital ".$interes1;
    }elseif($vcapital>=500 && $vcapital<=1500){
        echo "Capital ingresado: ". $vcapital." valor a capital ".$interes2;
    }if($vcapital>=1500){
        echo "Capital ingresado: ". $vcapital." valor a capital ".$interes3;
    }
    ?>