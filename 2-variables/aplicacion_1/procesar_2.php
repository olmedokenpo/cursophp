<?php

//var_dump($_GET);

if($_GET['nombre']){
	$nombre=$_GET['nombre'];
}else{
	$nombre= "NO ha llegado el nombre del estudiante";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plantilla</title>
</head>
<body>

	<h1>Desde una plantilla veo el nombre del estudiante es: <?=$nombre?></h1>

</body>
</html>