<?php

//Ejercicio 1. 
function generarNombre($nombre){
    
    return "<h1>Hola, ".$nombre."!!</h1>";

    echo generarNombre("Jesus");

}

//Ejercicio 2

function CalcularTotal ($precio, $cantidad, $impuesto){
    
    return $precio * $cantidad - $precio * $cantidad * $impuesto;

    echo CalcularTotal(200, 3, 5);

}


//Ejercicio 3

$texto = "Hola me llamo Jesus Andres Taipe Quispe";
$limite = 9;

function generarResumen($texto, $limite){

    return ;

}


// Ejercicio 4

/*Conversión de temperaturas
Crea una función convertirTemperatura($temperatura, $escala)
que reciba una temperatura y la escala a la que debe convertir (“C”
para Celsius o “F” para Fahrenheit) y devuelva el resultado convertido.
*/
?>