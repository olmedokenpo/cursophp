<!DOCTYPE html>
<html>
<head>
    <title>Procesar Formulario</title>
</head>
<body>
    <h1>Mensaje Enviado</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $mensaje = $_POST["mensaje"];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Mensaje: $mensaje</p>";
    

    }
    ?>
</body>
</html>
