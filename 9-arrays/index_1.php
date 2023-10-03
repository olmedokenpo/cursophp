<?php
//Arrays
/*
Es un contenedor que puede guardar difentes datos.
*/
//array de numeros
echo "<br>";
$numero=array(1,2,200,300);
var_dump($numero);


//array de numeros
echo "<br>";
echo "<br>";
$animales=array('perro','gato','pollo');
var_dump($animales);

//array alfanumerico
echo "<br>";
echo "<br>";
$alfanumericos=array('perro',2,'pollo',99, true);
var_dump($alfanumericos);
var_dump($alfanumericos[2]);
echo "<br>";

echo "<br>";
echo "<br>";

//arrays asociativos
$unArrayAsociativo=array(
	'nombre'=>'Alvaro',
	'apellido'=>'Olmedo',
	'telefono'=>'554433221',
	'correo'=>'olmedo@gmail.com'

);
var_dump($unArrayAsociativo);
echo "<br>";
echo "<br>";
var_dump($unArrayAsociativo['correo']);

//acceso a datos dentro de un array. Podemos acceder a un dato por su posición. Veamos ejemplos:

//array alfanumerico
echo "<br>";
echo "<br>";
$alfanumericos=array('perro',2,'pollo',99, true);
var_dump($alfanumericos);
var_dump($alfanumericos[2]);
echo "<br>";

echo "<br>";
echo "<br>";

//arrays asociativos
$unArrayAsociativo=array(
	'nombre'=>'Alvaro',
	'apellido'=>'Olmedo',
	'telefono'=>'554433221',
	'correo'=>'olmedo@gmail.com'

);
var_dump($unArrayAsociativo);
echo "<br>";
echo "<br>";
var_dump($unArrayAsociativo['correo']);

echo "<br>";
echo "<hr>";

//recorrer un array mediante un for

for($i=0; $i<count($alfanumericos); $i++){

	//echo "<br>";
	//echo $alfanumericos[$i]."<br>";
	var_dump($alfanumericos[$i]);

}

echo "<br>";
echo "<br>";

//recorrer un array mediante un foreach

foreach ($alfanumericos as $key => $value) {
	//echo "<br>";
	//echo $value;
	var_dump($key);
}

echo "<br>";
echo "<br>";


foreach ($alfanumericos as $key => $alfanumerico) {
	//echo "<br>";
	//echo $value;
	var_dump($alfanumerico);
}

echo "<br>";
echo "<br>";

foreach ($alfanumericos as $alfanumerico) {
	//echo "<br>";
	//echo $value;
	var_dump($alfanumerico);
}

echo "<br>";
echo "<br>";
$animales=array('perro','gato','pollo');

foreach ($animales as $animal) {
	//echo "<br>";
	//echo $value;
	var_dump($animal);
}


echo "<br>";
echo "<br>";
echo "<hr>";
//Algunas funciones que trabajas sobre array

//funcion para agregar un valor a un array

$numero=array(1,2,5,7);
var_dump($numero);

echo "<br>";
echo "<br>";

//sin función
$numero[]=5;
var_dump($numero);

echo "<br>";
echo "<br>";

//con funcion
array_push($numero, 99);
var_dump($numero);

echo "<br>";
echo "<br>";

//funcion para borrar valor de un array

//función array_pop()

array_pop($numero);
var_dump($numero);

echo "<br>";
echo "<br>";

array_pop($numero);
var_dump($numero);

echo "<br>";
echo "<br>";
echo "a";
echo "<br>";
echo "<br>";
unset($numero[2]);
var_dump($numero);

echo "<br>";
echo "<br>";

unset($numero[2]);

$numero=$numero;

var_dump($numero);

echo "<br>";
echo "<br>";
echo "<hr>";

//arrays multidimensionales o array de arrays

$clientes=array(
	'cliente_1'=>array(
		'nombre'=>'Alvaro',
		'apellido'=>'Olmedo',
		'correo'=>'olmedo@gmail.com'
	),
	'cliente_2'=>array(
		'nombre'=>'Javier',
		'apellido'=>'Tapiador',
		'correo'=>'tapiador@gmail.com'
	),
	'cliente_3'=>array(
		'nombre'=>'Loredana',
		'apellido'=>'Simerea',
		'correo'=>'simerea@gmail.com'
	),
);

var_dump($clientes);
echo "<br>";
echo "<br>";
var_dump($clientes[1]);
echo "<br>";
echo "<br>";
var_dump($clientes[1]['correo']);

echo "<br>";
echo "<br>";
echo "<Hr>";


$misDatos=array('pedro','juan');
$nuevoValor="lorena";
var_dump($misDatos);

echo "<br>";
echo "<br>";




function agregarValor($array, $valor){

	$array[]=$valor;
	return $array;

}

$misDatos=agregarValor($misDatos, $nuevoValor);
var_dump($misDatos);

echo "<br>";
echo "<br>";
echo "<hr>";

$cliente_clave=array_keys($clientes);

?>