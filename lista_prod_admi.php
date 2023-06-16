<?php

include("conexion.php");

   	  	
$consulta_productos = mysqli_query($conexion, "SELECT * FROM productos");

//Imprima la tabla de productos


?>
 <!DOCTYPE html>
<html>
<head>
  <title>Jewelry Bohemy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devide-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="">
    <link rel="shortcut icon" href="Jewelry\principal/log.JGP">
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
   	  	<td>Nombre del Producto</td>
   	  	<td>Marca</td>
         <td>Proveedor</td>
   	  	 <td>Existencias</td>
         <td>Precio</td>
         <td>Observacion</td>
         <td>Muestra</td>
         <td>Estado</td>
   	  </tr>

<?php
   while ($productos = mysqli_fetch_array($consulta_productos)) {
   	echo "<tr>";
   	    echo"<td>".$productos['nombre']."</td>";
   	    echo"<td>".$productos['marca']."</td>";
        echo"<td>".$productos['proveedor']."</td>";
   	    echo"<td>".$productos['existencias']."</td>";
        echo"<td>".$productos['precio']."</td>";
        echo"<td>".$productos['observacion']."</td>";
        echo"<td>".$productos['muestra']."</td>";
        
       echo"<td><a href='eliminar_prod.php?id_prod=".$productos['id_prod']."'>Eliminar</a></td>"; 
   	 echo "</tr>";
   }

?>
   
   </table>

</center>

<br><br>  

<a href="administrador.php">Regresar al Menu Principal</a>
</body>
