<?php

//var_dump($_GET);

if($_GET['nombre']){
	$nombre=$_GET['nombre'];
	header("location: plantilla.php?dato=$nombre");
}else{
	$nombre= "NO ha llegado el nombre del estudiante";
}

?>