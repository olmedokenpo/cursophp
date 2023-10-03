


<?php 
$clientes = array(
    'amazon' => array(
        'nombre' => 'Alvaro',
        'apellido' => 'Olmedo',
        'telefono' => '554433221',
    ),
    'seur' => array(
        'nombre' => 'David',
        'apellido' => 'Porter',
        'telefono' => '665544332',
    ),
    'dhl' => array(
        'nombre' => 'Alberto',
        'apellido' => 'Asecas',
        'telefono' => '776655443',
    ),
    'correos' => array(
        'nombre' => 'Rebeca',
        'apellido' => 'Goméz',
        'telefono' => '443322110',
    )
);


if(isset($_GET) && empty($_GET)){

    include 'vistas/formulario.php'; 
    
}elseif($_GET['accion']=="ver_todos"){

include 'funciones/funciones_todos.php'; 
include 'vistas/ver_todos.php'; 

}elseif($_GET['accion']=="ver_uno"){

    include 'funciones/funcion_un_cliente.php'; 
    include 'vistas/ver_uno.php'; 

}else{

    echo "No se ha seleccionado ninguna acción";

}



?>

