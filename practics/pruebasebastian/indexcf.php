<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sombrero Seleccionador de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>
<form action="bienvenida.php" method="post">
    <div>
    <label> Nombre: </label>
    <input type="text" id="nombre" name="nombre">
    <br>
    </div>
    <div>
    <form action="bienvenida.php" method="post">
    <label> Apellido: </label>
    <input type="text" id="apellido" name="apellido">
    <br>
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>
</body>
</html>