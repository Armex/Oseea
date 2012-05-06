<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css"> 
<title>Oseea</title>
</head>
<body>
<?php
session_start();
session_name("autentificado");
$_SESSION["autentificado"]="SI";
?>
<div id="userpanel">
	<a href="login.php">Login</a> | <a href="registro.php">Registro</a>
</div>
<div id="logo">
  <img src="./images/logo.png" />
</div>
<div id="main">
	<img id="beta" src="./images/beta.png" />
  <div id="top"></div>
	<div id="middle">
		
		<h1>Subir Archivos</h1>
		
		<form enctype="multipart/form-data" action="upload.php" method="post">

			<div id="boxtop"></div><div id="boxmid">

				<div class="section">
					<span>Archivo:</span>
					<input type="file" name="archivo" />
				</div>

			</div><div id="boxbot"></div>
	
			<div class="text" style="float: left;"><p>Tamaño Max. 10 Mb</p><p>Archivos soportados: jpg, gif, png, pdf, rar, zip</p></div>
		   	<div class="text" style="float: right;">

			<input type="submit" value="Subir" name="upload" class="submit" />
            <input name="action" type="hidden" value="upload" /> 
		</div>
		<br style="clear:both; height: 0px;" />
		
		</form>
	
	</div>
	<div id="bottom"></div>
</div>
<div id="pie"><a href=""
onClick="window.open('terminos.html','Términos y Condiciones', 'width=640, height=480');
return false">Términos y condiciones</a> | <a href="mailto:deozamox@gmail.com&subject=Oseea">Contacto</a></div>
</body>
</html>
