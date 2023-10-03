<?php include 'funciones.php';?>

<?php

//var_dump($_GET);
//die();




if($_GET['accion']=="ver_todo"){

	

	include 'vistas/ver_todos.php';


	

}else{

	echo "No se ha implementado esta acción";

}


?>