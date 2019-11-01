<?php

    //$hora = date("H");

    $hora = $_GET["horaAtual"];

    if($hora < 18){
        echo "Bom Dia";
    }
    elseif($hora < 18){
        echo "Boa Tarde";
    }
    else{
        echo "Boa Noite";
    }