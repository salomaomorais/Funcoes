<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2> Buscar Texto </h2>

<?php

function busca_texto1($b){
echo "Foi encontrada a palavra:"."<p style='color:red;'>".$b."<p style='color:black;'>";

}

$busca_texto='busca_texto1';
    $texto=["Rosa","Violeta","Bromelia","Caliandra","Magnolia","Cravo"];
    foreach ($texto as $b){
        $busca_texto($b);

    echo "<br>";
}

?>


</body>
</html>
