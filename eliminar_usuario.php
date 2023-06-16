<?php
include("conexion.php");

$id = $_GET['id'];

$eliminar = "DELETE FROM usuarios WHERE id = $id";

//ejecutar la consulta y verificacion si se elimino

if (mysqli_query($conexion, $eliminar)) {
	echo "Usuario eliminado con Exito";
	header('location:lista_usuario.php');
}
else{
	echo "Error al eliminar este registro".mysql_error($conexion);
}

// cerramos conexion

mysqli_close($conexion);
?>