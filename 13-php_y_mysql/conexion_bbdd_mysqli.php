<?php
//Conectarme con el procedimiento orientado a funcion mysqli_connect

//Conectarme con la BBDD
$servername="localhost";
$username="root";
$password="";
$dbname="servicios_bbdd";

$conn=mysqli_connect($servername,$username,$password,$dbname);

//verificar conexion
if(mysqli_connect_errno()){
	echo "falla la conexion con BBDD: ". mysqli_connect_error();
}else{
	Echo "He podido establecer conexion con la BBDD";
}

//Realizar consultas

mysqli_query($conn,"SET NAMES 'utf8'");

$result=mysqli_query($conn, "SELECT * FROM cliente");
echo "<br>";
//var_dump($result->fetch_assoc());
echo "<br>";

$nombres_clientes=array();

while($fila=$result->fetch_assoc()){
	$nombres_clientes[]=($fila["nombre"]);
	echo $fila["nombre"];
	echo "<br>";

}

	echo "<br>";
var_dump($nombres_clientes);

include 'vista.php';

// Cierro la conexión
$conn->close();

?>