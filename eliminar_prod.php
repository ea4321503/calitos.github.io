<?php
include("conexion.php");

$id_prod = $_GET['id_prod'];

$eliminar = "DELETE FROM productos WHERE id_prod = $id_prod";

//ejecutar la consulta y verificacion si se elimino

if (mysqli_query($conexion, $eliminar)) {
	echo "Producto eliminado con Exito";
	header('location:lista_prod.php');
}
else{
	echo "Error al eliminar este registro".mysql_error($conexion);
}

// cerramos conexion

mysqli_close($conexion);
?>