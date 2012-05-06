<?php 
$status = "";
if ($_POST["action"] == "upload") {
    //datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
   
    if ($archivo != "") {
        // guarda el archivo a la carpeta files
        $destino =  "files/".$prefijo."_".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            echo "Archivo subido: <b>".$archivo."</b>";
        } else {
            echo "Error al subir el archivo";
        }
    } 
	
	else {
        echo "Error al subir archivo";
    }
}
?> 
