<?php

$animales_2 = array(
    'terrestres' => array('perro', 'gato'),
    'marinos' => array('ballena', 'foca'),
    'aereos' => array('codorni', 'loro')
);

$clientes=array(
	'cliente_1'=> array(
		'nombre'=>'Alvaro',
		'apellido'=>'Olmedo',
		'telefono'=>'554433221',
	),
	'cliente_2'=> array(
		'nombre'=>'David',
		'apellido'=>'Porter',
		'telefono'=>'665544332',
	),
	'cliente_3'=>array(
		'nombre'=>'Alberto',
		'apellido'=>'Asecas',
		'telefono'=>'776655443',
	),
);




function verTodos($ver_todos) {
    echo "<table border='1'>";
    echo "<tr><th>Clientes</th><th>datos</th></tr>";

    foreach ($ver_todos as $tipo => $lista) {
        echo "<tr>";
        echo "<td>$tipo</td>";
        echo "<td>";
        foreach ($lista as $data) {
            echo "$data<br>";
        }
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
}



//verTodos($clientes);





?>