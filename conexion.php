<?php


$servidor="localhost";
$usuario="root";
$password="";
$basededatos="jewelry";


$conexion=mysqli_connect($servidor, $usuario, $password, $basededatos);


//Verificamos la conexion
if (!$conexion) {
	echo "Conexio Fallida";
}

?>