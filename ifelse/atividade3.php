<?php
    $senha = $_GET["senha"];

   if($senha == "1234"){
       echo "Acesso Permitido";
   }
   else{
       echo "Acesso Negado";
   }
