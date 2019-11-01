<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordem Crescente</title>
</head>
<body>
    <style>
        .numero1{
            color: #00cc66;
        }

        .numero2{
            color: #ff0000;
        }

        .numero3{
            color: #0066ff;
        }
    </style>
    
    <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];
        $n3 = $_GET["numero3"];

        if($n1 < $n2&$n3){
            echo "<p class='numero1'>$n1</p>";
            if($n2 < $n3){
                echo "<p class='numero2'>$n2</p>";
                echo "<p class='numero3'>$n3</p>";
            }
            else{
                echo "<p class='numero3'>$n3</p>";
                echo "<p class='numero2'>$n2</p>"; 
            }
        }
        elseif($n2 < $n1&$n3){
            echo "<p class='numero2'>$n2</p>";
            if($n1 < $n3){
                echo "<p class='numero1'>$n1</p>";
                echo "<p class='numero3'>$n3</p>";
            }
            else{
                echo "<p class='numero3'>$n3</p>";
                echo "<p class='numero1'>$n1</p>"; 
            }
        }
        elseif($n3 < $n1&$n2){
            echo "<p class='numero3'>$n3</p>";
            if($n1 < $n2){
                echo "<p class='numero1'>$n1</p>";
                echo "<p class='numero2'>$n2</p>";
            }
            else{
                echo "<p class='numero2'>$n2</p>";
                echo "<p class='numero1'>$n1</p>"; 
            }
        }
    ?>

</body>
</html>