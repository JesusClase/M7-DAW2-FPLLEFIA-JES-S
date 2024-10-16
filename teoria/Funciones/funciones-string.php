<?php
$cadena = "hola mundo";
//longitud de caracteres --> strlen()


echo strlen($cadena);

//2. strpos
echo strpos($cadena, "mundo");

//3. str_replace
echo str_replace("mundo", "barcelona", $cadena);

//4.strlower
echo strtolower($cadena);

//5.strtoupper
echo strtoupper($cadena);

//6.ucfirst
echo ucfirst($cadena);

//7.ucwords
echo ucwords($cadena);

//8.trim
//Junta las palabras sin espacios
$cadena2 = 'leo messi';
echo '<br>';
echo trim($cadena2);

//9.substr()
//obtiene una parte de una cadena
echo substr($cadena2, 3, 3);

//implode

//explode



?>