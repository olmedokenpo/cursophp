<?php
//Las constantes tambien son contenedores que no cambian su valos en tiempo de ejecusión.
define('NOMBRE', 'Mi constante');
echo NOMBRE;
echo "<br>";
define('URL_BASE', 'http://localhost/cursophp');
echo URL_BASE;

echo "<br>";
$url=URL_BASE."/4-constantes";
echo $url;


echo "<br>";

echo PHP_VERSION;

echo "<br>";

//echo __FILE__;

echo __DIR__;

echo "<br>";

print_r(get_defined_constants(true));







?>