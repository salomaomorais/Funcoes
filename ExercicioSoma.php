<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2> Exercício de Somar Números</h2>

<?php

function soma_num(){
    $numeros = [1, 13, 22, 11, 9];
    $menor = 0;
    $string = "Valores no vetor;".implode(",",$numeros).'<br>';
    echo $String;
    foreach($numeros as $a){
        if($a > 0){
            $soma = array_sum($numeros);

        }

    }
echo "A soma dos vetores é:".$soma;
}
soma_num()
?>



</body>
</html>
