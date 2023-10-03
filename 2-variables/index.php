<?php
/*
Es un contenedor que permite guardar cualquier información-dato
En PHP una variable se define con el simbolo $. 
*/

$numero_1=4;

echo $numero_1;


echo "<br>";

echo gettype($numero_1);

$numero_2=3;


echo "<br>";

echo gettype($numero_2);

echo $numero_1+$numero_2;

echo "<br>";

var_dump($numero_1);

echo "<br>";

//Podemos tener variables locales, globales y superglobales.

echo $_SERVER['SERVER_PORT'.];

echo "<br>";



?>