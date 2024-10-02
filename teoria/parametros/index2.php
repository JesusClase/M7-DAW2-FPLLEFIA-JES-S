<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina para recibir la informacion</h1>
    <?php 

    /*if (isset($_GET['nom']) && isset($_GET['edad'])){
        $nom = $_GET['nom'];
        $edad = $_GET['edad'];

        echo "<p>Nom: $nom</p>";
        echo "<p>edad: $edad</p>";
    }*/

    if(isset($_GET['nombre'])&& isset($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        echo $nombre;
        echo $edad;

    }

    ?>

</body>
</html>