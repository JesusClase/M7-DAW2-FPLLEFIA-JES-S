<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aleatorio</title>
    <style>
        .par{
            padding: 10px;
            background-color: rebeccapurple;
            color:white;
        }
        .impar{
            padding: 10px;
            background-color: black;
            color:white;
        }
    </style>
</head>
<body>
    <h1>Numero aleatorio par o impar</h1>
</body>
</html>

<?php

$aleatorio=  rand(0,100);

    if ($aleatorio%2 == 0){
    
        echo "<div class='par'>{$aleatorio}</div>";
    } else {
     
        echo "<div class='impar'>{$aleatorio}</div>";
    }
?>