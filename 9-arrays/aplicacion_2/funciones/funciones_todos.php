<?php
include 'datos.php';


function verTodos($ver_todos) {
    echo "<table border='1'>";
    echo "<tr><th>Cliente</th><th>Nombre</th><th>Apellido</th><th>Telefono</th></tr>";

    foreach ($ver_todos as $key => $values) {
        echo "<tr>";
        echo "<td>$key</td>";
        foreach ($values as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}





//Para test
//verTodos($clientes);
//





?>
