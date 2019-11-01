<?php

    $num1 = 10;
    $num2 = 20;

    $resultado = $num1 + $num2;

    echo "Resultado: " . $resultado;

    $frase = "Algum texto";

    echo "<br>";

    echo "Escrevendo $frase";

    $numDecimal = 10.6;

    $carros = array('fusca', 'voyage', 'escort', 'kadett');

    echo "<br>";

    echo $carros[0];

    $condicao = true; //ou false

    echo "<br>";

    //echo $condicao;

    $x = 25.20;
    $int_cant = (int)$x;
    echo $int_cant;

    echo "<br>";

    $n1 = 2;
    $n2 = 3;

    //echo $n1 % $n2; resto da divisão

    echo $n1 ** $n2; //potência

    echo "<br>";
    

    $status = ($condicao) ? "Verdadeiro" : "Falso";
    echo $status;