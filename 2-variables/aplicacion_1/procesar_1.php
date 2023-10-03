<?php

var_dump($_GET);

echo "<br>";


if($_GET['nombre']){
	$nombre=$_GET['nombre'];
	echo "<h1>El estudiante es: ". $nombre."</h1>";
}else{
	echo "<h1>NO ha llegado el nombre del estudiante</h1>";
}



?>