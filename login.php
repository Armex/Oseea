<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>Oseea : Login</title>
</head>
<body>
<?php
//if();

?>
<div id="userpanel">
	<a href="login.php">Login</a> | <a href="registro.php">Registro</a>
</div>
<div id="logo">
		<a href= "./index.php"><img src="./images/logo.png" alt="Da click para regresar al menú principal" /></a>
	</div>
<div id="main">
	<img id="beta" src="./images/beta.png" />
    <div id="top"></div>
	<div id="middle">
		<h1>Login</h1>
        <form action="./validar_entrada.php" method="post" name="validar">
        <div id="boxtop"></div><div id="boxmid">
    	
			<div id="user" class="section">
      				<span>Usuario:</span><input type="text" name="usuario" required />
            </div>
            <br />
            <div id="password" class="section">
	 				<span>Password:</span><input type="password" name="password" required />
            </div>
        </div>
        <div id="boxbot"></div>
        <div class="text" style="float: left;">
                	<p><a href="./recordar.html">¿Olvidaste tu contraseña?</a></p>
        </div>
        <div class="text" style="float: right;">
                	<input type="submit" value="Ingresar" name="ok" class="submit">
        </div>
        <br />
        </form>
   	</div>
    <div id="bottom"></div>
</div>
<div id="pie"><a href="terminos.html" target="">Términos y condiciones</a> | <a href="mailto:deozamox@gmail.com&subject=Oseea">Contacto</a></div>
</body>
</html>
