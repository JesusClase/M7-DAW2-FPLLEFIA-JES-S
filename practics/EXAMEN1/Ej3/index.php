
<?php

$personas =[
    [
        "nombre" =>"Lionel Messi", 
        "foto" =>"https://lamarina.eldiario.es/wp-content/uploads/2020/12/Messi.jpg",
        "telefono" =>"678543458",
        "edad" =>"37 años",
        "correo"=>"leomessi@gmail.com",
        "profesion" =>"Futbolista"
    ],
    [
        "nombre" =>"Romeo Santos",
        "foto" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVptRs5yCFhhQ3ZVDvwzncWfAtml4dVGGGUA&s",
        "telefono" =>"678543458",
        "edad" =>"43 años",
        "correo" =>"romeoelsantos@gmail.com",
        "profesion" =>"Cantante"
    ],
    [
        "nombre" =>"Metro Boomin",
        "foto" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRGTS-m9E1bUtPZKpNfcsnkU75mkhomC1TCQ&s",
        "telefono" =>"678543458",
        "edad" =>"31 años",
        "correo" =>"Metrospiderveerse@gmail.com",
        "profesion" =>"Compositor"
    ]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 php</title>
    <style>
        .imagenes{
            height: 400px;
        }
        .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

  </style>
</head>
<body>
        
<div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
            foreach ($personas as $persona){
            echo'

              <div class="card-body">
                <p class="card-text">' .$persona['nombre'] . '</p>
                <img class="imagenes" src="'.$persona['foto'].'">;
                <div><button><a href="fitxa.php?nombre='.$persona['nombre'].$persona['correo'].$persona['foto'].$persona['profesion'].$persona['telefono'].$persona['edad'].'">Más informacion</a></button></div>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>';
            }
        ?>
        </div>
      </div>
    </div>
  </main>



        <?php
            foreach($personas as $persona){

                echo '<div>'.$persona['nombre'].'</div>';
                echo '<img class="imagenes" src="'.$persona['foto'].'">';
                echo '<div><button><a href="fitxa.php?nombre='.$persona['nombre'].$persona['correo'].$persona['foto'].$persona['profesion'].$persona['telefono'].$persona['edad'].'">Más informacion</a></button></div>' ;
            }
        ?>
</body>
</html>