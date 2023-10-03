<?php
//sesiones
/*
Las sesiones son mecanismos que permite la persistencia de datos del uruario mientras navega por la web.
*/
//Definir una session-->session_start()

session_start();

$variable_sin_sesion="Hola desde una variable sin sesion";
// $_SESSION['variable_con_sesion']="Hola desde una variable con sesion";

$_SESSION['variable_con_sesion']=array();
$_SESSION['variable_con_sesion']['usuario']='olmedokenpo';
$_SESSION['variable_con_sesion']['tipo_de_usuario']='administrador';


echo $variable_sin_sesion;
echo "<br>";
echo "<br>";
echo $_SESSION['variable_con_sesion']['usuario'];
echo "<br>";
echo "<br>";
echo $_SESSION['variable_con_sesion']['tipo_de_usuario'];
echo "<br>";
echo "<br>";
echo '<a href="contenido.php">Ir a Contenido</a>';


?>