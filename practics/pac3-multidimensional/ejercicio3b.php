
<?php

$frutas = [
    ["fruta" => "Manzana", "tf" => false, "foto" => "https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png"],
    ["fruta" => "Platano", "tf" => false, "foto" => "https://static.vecteezy.com/system/resources/previews/012/909/741/original/single-of-banana-png.png"],
    ["fruta" => "Naranja", "tf" => false, "foto" => "https://static.vecteezy.com/system/resources/thumbnails/040/750/078/small_2x/ai-generated-orange-orange-isolated-refreshing-citrus-fruit-orange-slices-orange-top-view-orange-flat-lay-png.png"],
    ["fruta" => "Fresa", "tf" => false, "foto" => "https://static.vecteezy.com/system/resources/previews/024/596/055/non_2x/strawberry-strawberry-with-transparent-background-transparent-strawberry-ai-generated-free-png.png"],
    ["fruta" => "Kiwi", "tf" => false, "foto" => "https://static.vecteezy.com/system/resources/previews/008/532/603/non_2x/kiwi-fruit-cutout-file-png.png"],
]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>

        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($frutas as $fruta){
                    echo'
                    <tr class="table-danger">;
                    <td>' .$fruta['fruta'] . '</td>';
                    
                    if($fruta['tf']==false){
                        echo '<td>No seleccionada</td>';
                        $fruta['tf'] = true;
                        if(isset($_GET['tf']) == true){
                            echo '<td> ✔️ Fruta seleccionada</td>';
                        }
                    }
                    echo'
                    <td><a class="btn btn-primary" href="?fruta='.$fruta['fruta'] .'">Seleccionar</a></td>
                </tr>';
                }

                /*if (isset($_GET['fruta'])){
                    
                    echo'
                    <tr class="table-danger">;
                    <td>' .$fruta['fruta'] . '</td>
                    <td>✔️Fruta seleccionada</td>
                    <td><a class="btn btn-primary" href="?fruta='.$fruta['fruta'] .'">Seleccionar</a></td>
                </tr>';

                }*/
                ?>
            </tbody>
        </table>

        <!-- Mostrar tarjeta de la fruta seleccionada (actualmente estatica, siempre hay una manzana) -->
        <div class="card mt-4 w-25 shadow-lg">
            <img src="https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png" class="card-img-top img-fluid" alt="Manzana">
            <div class="card-body bg-warning">
                <h5 class="card-title"></h5>
                <p class="card-text">¡Esta es tu fruta favorita!</p>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- aqui tienes el emoji de SELECCIONADA ✔️ para copiarlo y usarlo en la práctica -->

