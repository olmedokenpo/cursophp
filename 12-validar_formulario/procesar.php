<?php 
		$error="";
	if(!empty($_GET['nombre'])){
		$error=false;

		$nombre=$_GET['nombre'];

		if(!is_string($nombre) || !preg_match("/^[a-zA-Z]+$/",$nombre)){
			echo"entre aqui";
			$error="Has escrito algo mal en el campo nombre";
		}

	}else{
		echo "no han llegado los datos";

		$error="no han llegado los datos";
	}

	if($error){
		header("Location:index.php?error=$error");
	}

	echo "todo ha ido bie, bienvenido a la logica";


?>