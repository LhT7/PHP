<?php
    $quantidade = $_GET["quantidade"];
    
   if($quantidade > "12"){
       $banana = "15";
       $valor = $banana * $quantidade;
       print "R$" . $valor;
   }
   else{
       $banana = "20";
       $valor = $banana * $quantidade;
       print "R$" . $valor;
   }
  
