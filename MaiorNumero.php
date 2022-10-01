<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Demostrar o Maior Número de uma relação de números</h2>    

<?php

function maior_num(){
$_reverse = [1,2,3,101,5];
$menor = 0;
foreach($_reverse as $a){

    echo $a.'<br>';
    if($a > $menor){

        $menor = $a;

    }
}
echo "O maior número é".$menor;

}

maior_num()

?>


</body>
</html>
