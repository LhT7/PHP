<?php
    $altura = $_GET["altura"];
    $sexo = $_GET["sexo"];
    
   if($sexo == "homem"){
       $peso = ($altura * 72.7) - 58;
       print "Peso ideal: " . $peso;
   }
   else{
       $peso = ($altura * 62.1) - 44.7;
       print "Peso ideal: " . $peso;
   }