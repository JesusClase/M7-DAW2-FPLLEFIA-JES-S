


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas</title>
</head>
<body>
<?php

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    $foto = $_GET['foto'];
    $edad = $_GET['edad'];
    $correo = $_GET['correo'];
    $telefono = $_GET['telefono'];
    $profesion = $_GET['profesion'];
    echo $nombre;
    echo '<img src="'.$foto.'">';
    echo $edad;
    echo $correo;
    echo $telefono;
    echo $profesion;
    

}
?>
</body>
</html>