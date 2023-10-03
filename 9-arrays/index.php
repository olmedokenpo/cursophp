<?php 
//Se maneja una unica variable;
$array_1Dimension=array(1,2,3);
echo $array_1Dimension[1];

//Array de Arrays-->arrays de mas de una dimensión
$array_2dimesiones=array(
	array('a','b','c'),
	array(1,2,3)
);

echo "<br>";
echo "<br>";
Var_dump($array_2dimesiones);
echo "<br>";
Var_dump($array_2dimesiones[0][1]);

echo "<br>";
echo "<br>";

//array dse arrays asociativos
$array_2dimesiones=array(
	'letras'=>array('a','b','c'),
	'numeros'=>array(1,2,3)

);

echo "<br>";
echo "<br>";
Var_dump($array_2dimesiones);
echo "<br>";
Var_dump($array_2dimesiones['numeros'][2]);


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

$cliente_clave=array_keys($clientes);

echo "<br>";
echo "<br>";

var_dump($cliente_clave);


?>