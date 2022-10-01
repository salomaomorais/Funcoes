<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2> Conversão de Temperatura de Celsius para Fahrenheit<h2>

<?php

function convert_temp($i){
$f=$i;
$c=($f-32)/18;

echo "Se a temperatura em Fahrenheit é" .$f."º,a temperatura em Celsius será".$c."º";
}
convert_temp(90);
echo'<br>';
convert_temp(77);
echo'<br>';
convert_temp(54);
echo'<br>';
convert_temp(12);


?>

</body>
</html>
