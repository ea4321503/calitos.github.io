<?php
session_start();

//destruir todas las variables de sesion
session_unset();

//destruir la sesion
session_destroy();

//Redireccionar al usuario a la pagina de inicio de sesion
header("location: index.php");
exit();




?>