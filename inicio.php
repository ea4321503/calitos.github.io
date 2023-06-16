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
    <img src="principal/principal5.jpg" width="300" height="300">
    </div>
    <div class="text-overlay">
    <h1>Jewelry Bohemy</h1>
    <h1>Inicio Sesión</h1>
     <form action="checklogin.php" method="POST">
     	
     	<label>Ususario:</label>
     	<input type="text" name="username">
        <br><br>
     	<label>Contraseña:</label>
     	<input type="password" name="password">
        <br><br>
     	<input type="submit" value="Ingresar" name="Boton_ingresra">
     </form>
     </div>
</body>
</html>

<style type="text/css">

}

  .head{
    position: absolute;
    width:60%;
    align-content: center;
    border: 8px solid #black;

}

  .head img{
    width: 50%;
    height: 80%;
    padding-left: 25%;
    padding-top:  8%;
  }

  .text-overlay {
    margin-top: 150px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0,0,0,0.4);
    color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    width: 50%;
  }

  .text-overlay{
    font-size: 2em;
  }

form{
    width: 300px;
    margin: auto;
    padding: 100px;
    border: 1px solid #ccc;
    background-color: #AED6F1 ;
    text-align: center;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}

input[type="text"],
input[type="password"]{

    width:100%;
    padding: 10px 15px;
    margin: 8px 0;
    box-sizing: border-box; 
    border:2px solid #ccc;
    border-radius: 4px;
}

input[type="submit"]{
    width: 100%;
    padding: 8px 10px;
    border-radius: 5px;
    color: black;
    font-size: 16px;
}

 

</style>