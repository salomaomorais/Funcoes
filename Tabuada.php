<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Tabuada</title>
</head>
<body>

    
<?php
   
echo '<h2>' . 'Tabuada com Para' . '</h2>';

    function tabuada_v02 ( $n ){

for ($i = 0; $i <= 10; $i++){
    
    echo '<p>'. $n . 'x'. $i . '=' . $n * $i .'</p>';
    }
}
    
tabuada_v02(2);

?>
</body>
</html>

