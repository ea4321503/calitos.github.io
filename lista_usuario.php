<?php

include("conexion.php");

   	  	
$consulta_usuario = mysqli_query($conexion, "SELECT * FROM usuarios");

//Imprima la tabla de productos


?>
 <!DOCTYPE html>
<html>
<head>
  <title>Jewelry Bohemy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devide-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="">
    <link rel="shortcut icon" href="principal/logo.png">
</head>
<body bgcolor="#AED6F1">
   
   <div class="head">
    <hr>
    <center><img src="principal/log.jpg" width="400" height="400"><br>
    <a href="logout.php">Cerrar sesion</a></center>
    <hr>
  </div>
   <center>
   <table border="1" bgcolor="white">
      <tr><td colspan="10"><center> <h1>Lista de productos en el Sistema</h1></center></td></tr>
   	  <tr>
   	  	<td>Nombre  completo</td>
   	  	<td>Usuario</td>
        <td>Contraseña</td>
         <td>Correo</td>
   	  	 <td>Telefono</td>
         <td>Direccion</td>
         <td>Observacion</td>
         <td>Tipo de Permiso</td>
         <td>Fecha de Registro</td>
   	  </tr>

<?php
   while ($usuarios = mysqli_fetch_array($consulta_usuario)) {
   	echo "<tr>";
   	    echo"<td>".$usuarios['nombre']."</td>";
   	    echo"<td>".$usuarios['usuario']."</td>";
         echo"<td>".$usuarios['password']."</td>";
        echo"<td>".$usuarios['email']."</td>";
   	    echo"<td>".$usuarios['telefono']."</td>";
        echo"<td>".$usuarios['direccion']."</td>";
        echo"<td>".$usuarios['rol']."</td>";
        echo"<td>".$usuarios['fechareg']."</td>";
        
       echo"<td><a href='eliminar_usuario.php?id=".$usuarios['id']."'>Eliminar</a></td>"; 
   	 echo "</tr>";
   }

?>
   
   </table>

</center>

<br><br>  

<a href="administrador.php">Regresar al Menu Principal</a>
</body>
