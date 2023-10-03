<?php
//Funciones propias
/*
Son bloques de código agrupados con un fin especifico. 
Las funciones sirven entre otras cosas para: 
-"reutilizar código" 
-"estructurar un códido mayor"

//Definición

function miFuncion(){
	..codigo a ejecutar...
}
*/
//Ejemplo

// echo "<h1>Mi nombre es Javier</h1>";

// echo "<h1>Mi nombre es Javier</h1>";

// echo "<h1>Mi nombre es Javier</h1>";

// echo "<h1>Mi nombre es Javier</h1>";

// echo "<h1>Mi nombre es Javier</h1>";

//Función sin parametros

// function miNombre(){
// 	echo "<h1>Mi nombre es Ivan</h1>";
// }

// miNombre();

//Función con paso de parametros

// function miPelicula($pelicula){

// 	echo "<h1>Mi pelicula favorita es: $pelicula</h1>";

// }

// miPelicula('El gato pardo');

// miPelicula('No me apetece');

// miPelicula('El padrino');

// miPelicula($_GET['pelicula']);

//Función con paso de parametros predefinidos

// function titulo($titulo, $negrita=false){

// 	if($negrita){
// 		echo "Mi pelicula favorita es: <b>$titulo</b>";
// 	}else{
// 		echo "Mi pelicula favorita es: $titulo";
// 	}
// }

//titulo('El viaje de chihiro',false);

//Función con retorno (1)
function esDiaDeTrabajo($dia){
	$resultado;
	if($dia=="sabado" || $dia=="domingo"){
		 $resultado="<h1>Día de fin de semana<h1>";
	}else{
		$resultado="<h1>Día de trabajo, ¡¡¡¡¡parate flojo!!!!<h1>";
	}
	return $resultado;
}

//Función con retorno (2)
// function esDiaDeTrabajo($dia){
// 	if($dia=="sabado" || $dia=="domingo"){
// 		return "<h1>Día de fin de semana<h1>";
// 	}else{
// 		return "<h1>Día de trabajo, ¡¡¡¡¡parate flojo!!!!<h1>";
// 	}
// }

echo $resultado;
 echo esDiaDeTrabajo('sabado');
?>

