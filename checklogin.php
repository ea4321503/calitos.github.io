<?php

include("conexion.php");


$username = $_POST['username'];
$password = ($_POST['password']);

$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$username' AND password='$password'");

//verificacion si encontro algun

   if (mysqli_num_rows($usuarios)==1) {
     //Inicio de sesion
   	$usuario = mysqli_fetch_array($usuarios);
   
   	$_SESSION['nombre']=$usuario['nombre'];
   	$_SESSION['usuario']=$usuario['usuario'];
    $_SESSION['rol']=$usuario['rol'];


   	$_SESSION['loggedin']=true; //valida la sesion



   	if ($_SESSION['rol']=="administrador") {
   	header('Location:administrador.php');

   }  else if ($_SESSION['rol']=="vendedor") {
    header('Location:vendedor.php');  	
  }
  else if ($_SESSION['rol']=="usuario") {
    header('Location:principal_usuario.php');    
  }
}else{
  header('location:index.php');


//mysqli_close($conexion);
}
?>