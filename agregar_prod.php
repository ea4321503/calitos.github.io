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
    <center><img src="principal/log.jpg" width="300" height="300">
    </center></div>

   <center><h1>Ingrese datos del producto</h1></center>

   <center>
    <form action="guardar_prod.php" method="POST">
    	<table>
    		<tr>
    			<td>Nombre del producto</td>
    			<td><input type="text" name="nombre" required></td>
    		</tr>
    		<tr>
    			<td>Marca</td>
    			<td><input type="text" name="marca" required></td>
    		</tr>
    		<tr>
    			<td>Proveedor</td>
    			<td><input type="text" name="proveedor" required></td>
    		</tr>
            <tr>
                <td>Exitencias</td>
                <td><input type="text" name="existencias" required></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="precio" required></td>
            </tr>
             <tr>
                <td>Observaciones:</td>
                <td> 
                    <textarea name="observacion" placeholder="Breve descripcion del producto" rows="10" cols="35"></textarea>
                </td>
    		
            </tr>
            <tr>
                <td>Agregue la imagen de referencia</td>
                 <td><input type="file" name="muestra"></td>
            </tr>
    		<tr>
                <td></td>
    			<td><input type="reset" name="Borrar campo"></td>
    			<td><input type="submit" name="Guardar campo"></td>
    		</tr>


    	</table>
    	
    </form>
</center>

<br><br><br>
<center><button><a href="vendedor.php">REGRESAR AL MENU PRINCIPAL</a></button></center>
</body>
	





</html>