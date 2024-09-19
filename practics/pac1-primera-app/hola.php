<?php


function sayHello($name){
    echo "hello $name!";
}

?>

<html>
    <body>
    <header>
       <img src=".//logo-fpllefia.jfif" alt="">
       <h1>Modulo 7 - Practica 1. Mi primera aplicacion en PHP</h1>
    </header>
    <main>
        <?php
            sayHello('Remote world');
            phpinfo();
        ?>
    </main>
    <footer>
        <h1>Jesus Andres Taipe Quispe</h1>
        <h2>2024-12-09</h2>
    </footer>
    </body>
</html>