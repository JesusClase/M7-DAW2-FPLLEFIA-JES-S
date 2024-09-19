<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 </title>
    <style>
        .tablas{
            float: left;
            gap:10px;
            margin: 10px;
            padding: 15px;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Tabla del 1 al 10</h1>
</body>
</html>

<?php

    for($numeroprincipal=0; $numeroprincipal <= 10;$numeroprincipal++){
        
    echo '<div class="tablas ">';
        for($numero1=0;$numero1<=10;$numero1++){
            $resultado= $numeroprincipal * $numero1;
            echo "<div> {$numeroprincipal} x {$numero1} = {$resultado} </div>";
            echo'<br>';
        }
        echo '</div>';
    }
  

?>