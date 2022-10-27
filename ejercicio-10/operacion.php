<?php

    $ValorPago = $_POST['vap'];
    $precio = $ValorPago-($ValorPago*0.2);

    if($ValorPago>=20000){
            echo "Total a pagar: ".$precio. " se te desconto el 20%";    
        }else{
            echo "Total a pagar: ".$ValorPago. " no aplica descuento";  
    }
    
?>