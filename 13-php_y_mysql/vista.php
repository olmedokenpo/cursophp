<?php
echo "estoy dentro de la vista<br>";
var_dump($nombres_clientes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vista de datos</title>
</head>
<body>
<h1>Vista de datos</h1>


<ul>
<?php foreach($nombres_clientes as $nombre_cliente): ?>

	<li><?= $nombre_cliente; ?></li>

<?php endforeach; ?>
</ul>
	
</body>
</html>	