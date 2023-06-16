<?php


include("conexion.php");


//declaracion de variables para extraer los datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$telefono= $_POST['telefono'];
$direccion = $_POST['direccion'];
$rol = $_POST['rol'];
$fechareg = $_POST['fechareg'];
$departamento= $_POST['departamento'];
$dui= $_POST['dui'];
$fechanac = $_POST['fechanac'];
$preferencias = $_POST['preferencias'];
$metodopago = $_POST['metodopago'];

//Insertar los datos en la tabla usuario de la base de datos

$insertar_usuario = "INSERT INTO 
                     usuarios
                     (nombre, usuario, password, email, telefono, direccion, rol, fechareg, fechanac, preferencias, metodopago)
                     VALUES 
                     ('$nombre', '$usuario', '$password', 'email', '$telefono', '$direccion','$rol', '$fechareg', '$fechanac','$preferencias','$metodopago')";


//Validacion de datos, si fueron almacenados en base de datos

if (mysqli_query($conexion, $insertar_usuario)) {
    
    echo "<center><img src='principal/log.jpg'></center>";
	echo "<h1>Todos los datos que ingresaste para el nuevo usuario han sido almacenados con Exito!!</h1>";
	echo "<center><button><a href='administrador.php'>Menu Pincipal<button></center></a>";
}else{
	echo "Error".$insertar_usuario. "<br/>".mysqli_error($conexion);
}

//cerrando la conexion
//msqli_close($conexion);

?>

<body bgcolor="#FAE5D3 ">
	
</body>
