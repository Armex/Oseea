<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>OSSEA: Validar</title>
</head>

<?php

$Nombre = $_POST['usuario'];
$Password = $_POST['password'];
$Password2 = $_POST['password2'];
$Email = $_POST['email'];

if($Password != $Password2)
{
session_start();
$_SESSION["error"]=1;
echo "<script type=\"text/javascript\"> history.go(-1);</script>";
exit;
//session_destroy();
//header("location: registro.php?errorusuario=si");
}
else
{
session_start( ); // allows us to retrieve our key form the session

/* 

First encrypt the key passed by the form, then compare it to the already encrypted key we have stored inside our session variable

*/

if( md5( $_POST[ 'code' ] ) != $_SESSION[ 'key' ] ) {

       session_destroy();
	   header("location: registro.php?errorusuario=si");

} 
else {
$Nombre = $_POST['usuario'];
$Password = $_POST['password'];
$Email = $_POST['email'];

include ("conex.phtml");
$link=Conectarse();
$consulta="INSERT INTO USUARIOS(NOMBRE,PASSWORD,CORREO) VALUES ('$Nombre','$Password','$Email')";
$resultado = mysql_query( $consulta, $link ) or die( mysql_error() );
}
}
?>
<body>
</body>
</html>