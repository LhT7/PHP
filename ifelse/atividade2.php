<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votar Verificação</title>
</head>
<body>

    <?php
        $data = $_GET["dataNascimento"];
        $pode = "<img src='C:\xampp\htdocs\php\pode.jpg'>";
        $nao = "<img src='C:\xampp\htdocs\php\naopode.jpg'>";

        if($data > 18){
            echo $pode;
        }
        else{
            echo $nao;
        }
    ?>

</body>
</html>