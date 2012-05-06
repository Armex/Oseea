<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>Oseea : Registro</title>
</head>
<body>
<div id="userpanel">
	<a href="login.php">Login</a> | <a href="registro.php">Registro</a>
</div>
<div id="logo">
		<a href= "./index.php"><img src="./images/logo.png" alt="Da click para regresar al menú principal" /></a>
	</div>
<?php
error_reporting(0);
session_start();
if(isset($_SESSION["error"]))
//if ($_GET["errorusuario"]=="si")
{
echo ("<div align='center'>Favor de digitar los datos correctamente</div>");
}
?>
<div id="main">
	<img id="beta" src="./images/beta.png" />
    <div id="top"></div>
	<div id="middle">
		<h1>Registro</h1>
        <form action="./agregar_usuario.php" method="post" name="validar">
        <div id="boxtop"></div><div id="boxmid">
    	
			<div id="user" class="section">
      				<span>Usuario:</span><input type="text" name="usuario" required />
            </div>
            <br />
            <div id="password" class="section">
	 				<span>Password:</span><input type="password" name="password" required />
            </div>
                        <br />
            <div id="password2" class="section">
	 				<span>Repetir Password:</span><input type="password" name="password2" required />
            </div>
            <br />
            <div id="email" class="section">
	 				<span>Correo Electrónico:</span><input type="text" name="email" required />
            </div>
            <br />
          	<div id="captcha" class="section">
            
	 				<span>Captcha:</span><input type="text" name="code" required />
             
            </div>	
            <br />
            <div id="captcha2">
            	<img src="captcha.php" border="0" />
            </div>
        </div>
        <div id="boxbot"></div>
        <div class="text" style="float: left;">
                	<p><a href="./recordar.html">¿Olvidaste tu contraseña?</a></p>
        </div>
        <div class="text" style="float: right;">
                	<input type="submit" value="Registrar" name="ok" class="submit">
        </div>
        <br />
        </form>
   	</div>
    <div id="bottom"></div>
</div>
<div id="pie"><a href="terminos.html" target="">Términos y condiciones</a> | <a href="mailto:deozamox@gmail.com&subject=Oseea">Contacto</a></div>
</body>
</html>
