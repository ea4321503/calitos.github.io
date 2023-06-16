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

   <center><h1>Ingrese los datos del nuevo Usuario</h1></center>

   <center>
    <form action="guardar_usuario.php" method="POST">
    	<table>
    		<tr>
    			<td>Nombre completo</td>
    			<td><input type="text" name="nombre" required placeholder="Ej.Jose Lopez"></td>
    		</tr>
    		<tr>
    			<td>Usuario de acceso</td>
    			<td><input type="text" name="usuario" required placeholder="Ej. Jose"></td>
    		</tr>
    		<tr>
    			<td>Contraseña de acceso</td>
    			<td><input type="password" name="password" required></td>
    		</tr>
            <tr>
                <td>Correo Electronico</td>
                <td><input type="mail" name="email" required></td>
            </tr>
            <tr>
                <td>Telefono de contacto</td>
                <td><input type="tel" name="telefono" required></td>
            </tr>
             <tr>
                <td>Direccion:</td>
                <td> 
                    <textarea name="direccion" placeholder="Direccion de residencia actual" rows="10" cols="35"></textarea>
                </td>
    		
            </tr>
            <tr>
             <td>Acceso de usuario</td>   
            <td>
                <select name="rol">
                    <option value="administrador">Administrador</option>
                    <option value="vendedor">Vendedor</option>
                    <option value="usuario">Usuario</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Fecha de Hoy</td>
                <td><input type="date" name="fechareg" required></td>
            </tr>
             <tr>
                <td>Departamento(aplica para vendedor)</td>
                <td><input type="text" name="departamento" required></td>
            </tr>
             <tr>
                <td>Dui(aplica para vendedor)</td>
                <td><input type="text" name="dui" required></td>
            </tr>
              <tr>
                <td>Fecha de Nacimiento</td>
                <td><input type="date" name="fechanac" required></td>
            </tr>
            <td>Preferencias de Compras</td>
            <td> 
                <textarea name="preferencias" placeholder="Cuentanos un poco de tus preferencias sobre nuestros productos" rows="10" cols="35"></textarea>
                </td>
            
                <tr>
                    <td>Metodo de pago de su preferencia</td>
                    <td>
                        <select name="metodopago">
                            <option value="efectivo">Efectivo</option>
                            <option value="tarjetacred">Tarjeta de Crédito</option>
                            <option value="tarjteadeb">Tarjeta de Débito</option>
                            <option value="cheque">Cheque</option>
                            <option value="deposito">Transferencias bancaria electrónicas</option>
                            <option value="pagomovil">Pagos Móviles</option>

                        </select>
                    </td>
                    
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
<center><button><a href="administrador.php">Regresar Menú Principal</a></button></center>
</body>
	





</html>