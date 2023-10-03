<?php 
				if(isset($_GET['error'])){
					$error= $_GET['error'];
				}else{
					$error="";
				}
			?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar formulario</title>
</head>
<body>
<h1>Estamos validando formularios en PHP</h1>
	<form action="procesar.php" method="GET">

		<p>
			<?=$error?><br><br>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" >
		</p>

			<input type="submit" name="Enviar">
		
	</form>

</body>
</html>