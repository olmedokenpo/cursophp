<?php
//Condicionales o estructuras de control
/*
Los condicionales son estructuras de control q	ue permiten tomar decisiones en un código según los datos. Los condicionales siempre trabajan con operadores de comparación. Vamos a estudiar los siguientes condicionales:
-if
-elseif
-for
-while
-switch_case

*/
//if
/*
if(condicion){
	codigo 1
}else{
	codigo 2
}
*/
//Un ejemplo
/*$animal="perro";
if($animal=="perro"){
	echo "<h1>El animal es un Perro</h1>";
}else{
	echo "<h1>Es otro animal</h1>";
}*/

//echo "</br>";

//elseif
/*
if(condicion 1){
	codigo 1
}elseif(condicion 2){
	codigo 2
}elseif(condicion 3 ){
	codigo 3
}else{
	codigo por defecto
}


*/
//Otro ejemplo
/*$animal="";
if($animal=="perro"){
	echo "<h1>El animal es un Perro</h1>";
}elseif($animal=="gato"){
	echo "<h1>El animal es un Gato</h1>";
}elseif($animal=="conejo"){
	echo "<h1>El animal es un Perro</h1>";
}elseif($animal=="caballo"){
	echo "<h1>El animal es un Caballo</h1>";
}else{
	echo "<h1>Es otro animal</h1>";
}*/


//Otro ejemplo: if para dos o mas condiciones que evaluar
/*$animal="gato";
$dondeVive ="calle";
if($animal=="perro" && $dondeVive=="casa"){
	echo "<h1>El animal tiene dueño</h1>";
}else{
	echo "<h1>El animal no tiene dueño</h1>";
}*/

//Reto: Realice un sistema que reciba dos variables: Primera variable-->vieneAClase; Segunda variable--> pasaEjercicios
/*
Condiciones: 
1)Si viene a clase y hace los ejercicios esta aprobado
1) si falla con alguno de los prerequisitos o ambos estaré en suspenso
*/

//echo "</br>";

//for
/*
for(variable, condicion, incremento){
	codigo a ejecutar
}
*/
//Veamos un ejemplo 1 de for


/*$i=0;
for($i;$i<10;$i++){

	echo "</br>";
	echo $i;
}*/
//echo "</br>";

//Veamos un ejemplo 2 de for

//$nombre_animales=array("perro","gato","conejo","caballo");
//var_dump($nombre_animales);

//echo count($nombre_animales);

//echo "</br>";



/*echo "<select >";
						
for($i=0;$i<count($nombre_animales);$i++){

	echo "<option >$nombre_animales[$i]</option></br>";
}

echo "</select>";
*/

//Veamos un ejemplo 3 de for
// $nombre_animales=0;

// $nombre_animales=array("perro","gato","conejo","caballo","vaca");
//var_dump($nombre_animales);

//echo count($nombre_animales);

/*echo "</br>";



echo "<ol>";
						
	for($i=0;$i<count($nombre_animales);$i++){

		echo "<li>$nombre_animales[$i]</li>";

	}

echo "</ol>";*/



//While
/*
while(condicion de parada){
	codigo que ejecutar
}
*/
//Un ejemplo con while
 $animales=array("perro","gato","conejo","caballo","vaca");
 $animal="conejo";
// $encontrado=0; //Mientras $encontrado==0 debo permanecer dentro del while, de lo contrario salgo.


/*$dia=0;
$parada=0; //cuando $parada=1 salgo del while

while($parada==0){
	$var=$dia+1;
	$dia++;

	echo "día $var</br>";
	echo "Mientras no sea el día 5 estare aburrido en clase de Alvaro</br>";
	if($dia==5){
		$parada=1;
	}

	//$i++;
}*/

// Estado
// $dia=5
// $parada=1

//swich-case
/*
switch-case

$i=2;
switch($i){
	caso 0:
		se ejcuta codigo 1
		
	caso 1:
		se ejecuta codigo 2
		
	caso 2: 
		se ejecuta codigo 3
		
	defaul:
		se ejecuta codigo 5 o por defecto
}
*/
//veamos un ejemplo:

$dia=6;
switch($dia){
	case 0:
	 	echo "<h1>Hoy es lunes, tengo que ver al pesado de Alvaro</h1>";
	 	break;
	case 1:
	 	echo "<h1>Hoy es martes, tengo que ver al pesado de Alvaro</h1>";
	 	break;
	case 2:
	 	echo "<h1>Hoy es miercoles, tengo que ver al pesado de Alvaro</h1>";
	 	break;
	case 3:
	 	echo "<h1>Hoy es jueves, tengo que ver al pesado de Alvaro</h1>";
	 	break;
	case 4:
	 	echo "<h1>Hoy es viernes, tengo que ver al pesado de Alvaro</h1>";
	 	break;
	 default:
	 	echo "<h1>¡¡¡¡¡¡Por fin!!!, me aburrire en casa</h1>";
}



?>