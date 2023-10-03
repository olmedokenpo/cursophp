<?php

session_start();

echo $variable_sin_sesion;
echo "<br>";
echo "<br>";
echo $_SESSION['variable_con_sesion'];

echo "<br>";
echo "<br>";
echo $_SESSION['variable_con_sesion']['usuario'];
echo "<br>";
echo "<br>";
echo $_SESSION['variable_con_sesion']['tipo_de_usuario'];
echo "<br>";
echo "<br>";
echo '<a href="index.php">Regresar al Index</a>';


?>