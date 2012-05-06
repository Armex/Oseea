<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validacion</title>
</head>

<?php
include("conex.phtml");
$link=Conectarse();
$consulta="SELECT USUARIO,PASSWORD FROM EMPLEADOS WHERE USUARIO='ADMINISTRADOR'";
$resultado = mysql_query( $consulta, $link );
while ($row = @mysql_fetch_array($resultado)){
if($_POST['Pass']==$row["PASSWORD"]){}
else
{header("Location: Inicion.php");}
}
?>
<body>
</body>
</html>