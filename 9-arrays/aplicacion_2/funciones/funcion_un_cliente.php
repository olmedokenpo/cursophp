<?php
include 'datos.php';

function mostrarUnCliente($clientes, $nombreCliente) {
    if (isset($clientes[$nombreCliente])) {
        $cliente = $clientes[$nombreCliente];
        echo "Nombre: " . $cliente['nombre'] . "<br>";
        echo "Apellido: " . $cliente['apellido'] . "<br>";
        echo "Teléfono: " . $cliente['telefono'] . "<br>";
    } else {
        echo "El cliente '$nombreCliente' no existe.";
    }
}

function mostrarEnlacesClaves($claves) {
    echo "<h2>Lista de Clientes:</h2>";
    foreach ($claves as $clave) {
        echo "<a href='mostrar_cliente.php?clave=$clave'>$clave</a><br>";
    }
}

function obtenerClavesClientes($clientes) {
    $claves = array_keys($clientes);
    return $claves;
}


$claves=obtenerClavesClientes($clientes);
//var_dump($claves);
//mostrarEnlacesClaves($claves);
//mostrarUnCliente($clientes, 'seur');

?>
