<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros pares entre el 50 y el 500</title>
    <style>
        .padre{
            display: flex;
            gap:10px;
            flex-wrap: wrap;
        }
        .numpar{
            padding: 10px;
            background-color: rebeccapurple;
            color:white;
            
        }
    </style>
</head>
<body>
    <h1> Ejercicio 1: Numeros pares entre el 50 y 500</h1>
</body>
</html>

<?php

echo $numpar;
echo $residuo;

echo '<div class="padre">';
for ($numpar=50; $numpar!=501; $numpar++){

    if ($numpar%2 == 0){
        echo "<div class='numpar'> {$numpar} </div>";
        echo'<br>';

    }
    
}
echo '</div>'; //fin del div padre


?>