<?php
function titulo($titulo, $negrita=false){

	if($negrita){
		echo "Mi pelicula favorita es: <b>$titulo</b>";
	}else{
		echo "Mi pelicula favorita es: $titulo";
	}
}

function nombre($nombre){
	echo "mi nombre es: <b>$nombre</b>";
}

//***para test
//titulo('El Padrino',false);

//**/fin pata test


?>