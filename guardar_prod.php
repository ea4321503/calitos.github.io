<?php


include("conexion.php");


//declaracion de variables para extraer los datos del formulario
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$proveedor = $_POST['proveedor'];
$existencias = $_POST['existencias'];
$precio= $_POST['precio'];
$observacion = $_POST['observacion'];
$muestra=$_POST['muestra'];

//Insertar los datos en la tabla usuario de la base de datos

$insertar_producto = "INSERT INTO 
                     productos
                     (nombre, marca, proveedor,
                     existencias, precio, observacion, muestra)
                     VALUES 
                     ('$nombre', '$marca', '$proveedor', '$existencias', '$precio', '$observacion', '$muestra')";


//Validacion de datos, si fueron almacenados en base de datos

if (mysqli_query($conexion, $insertar_producto)) {
    
    echo "<center><img src='principal/log.jpg'></center>";
	echo "<center><h1>Los datos del producto han almacenado con exito!!</h1></center>";
	echo "<center><button><a href='vendedor.php'>REGRESAR AL MENU PRINCIPAL<button></center></a>";
}else{
	echo "Error".$insertar_producto. "<br/>".mysqli_error($conexion);
}

//cerrando la conexion
//msqli_close($conexion);

?>

<body bgcolor="#AED6F1">
	
</body>
