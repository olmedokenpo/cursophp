<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servicios_bbdd";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa <br>connect_error";


$sql = "SELECT * FROM servicios";
$result = $conn->query($sql);

var_dump($result);

echo "<br>";

var_dump($result->fetch_assoc());




die();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Descripción: " . $row["descripcion"]. "<br>";
    }
} else {
    echo "0 resultados";

}

$conn->close();


?>