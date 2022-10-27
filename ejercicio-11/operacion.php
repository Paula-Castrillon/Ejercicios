<?php
    $vproducto = $_POST['vproducto'];
    $preciovender = $vproducto+($vproducto*0.15);

    if($vproducto){
        echo"Lo puede vender en: ". $preciovender." y le gana el 15%";
    }
?>