<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercício de Criação de CPF<h2>
    
<?php

$n = 1;
function formata_cpf($n){
$cpf= str_pad($n, 11, 0, STR_PAD_LEFT);
$cpfarray = str_split($cpf,3);
echo "$cpfarray[0].$cpfarray[1].$cpfarray[2].$cpfarray[3]";
}
formata_cpf(1314152)

?>



</body>
</html>
