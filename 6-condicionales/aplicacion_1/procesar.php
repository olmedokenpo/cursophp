<?php

// var_dump($_GET);
// die();

if($_GET['asistencia']=="si" && $_GET['tarea']=="si"){
	$calificacion="Aprobado";
	

}else{
	$calificacion="Suspenso";
}

header("Location: plantilla.php?calificacion=$calificacion");

?>
