<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../../../Login.html';</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Barrido y Limpieza </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="../../../images/login.jpg">



<!-- Start Formoid form-->
<link rel="stylesheet" href="barrido_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="barrido_files/formoid1/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#000000;max-width:480px;min-width:150px" method="post" action="../controllers/RegBarrido.php"><div class="title"><center><img  src="../images/barrido.png" width="50" height="50"><center><strong><h2>Barrido y Limpieza</strong><center></div>


	<div class="element-date"><label class="title"><strong>Fecha</strong><span class="required">*</span></label><input class="large" data-format="yyyy-mm-dd" type="date" name="fecha" required="required" placeholder="yyyy-mm-dd"/></div>
	<div class="element-input"><label class="title"><strong>Nombre de Operario</strong><span class="required">*</span></label><input class="large" type="text" name="nombreope" required="required"/></div>


	<div class="element-input"><label class="title"><strong>Micro-Ruta</strong><span class="required">*</span></label><input class="small" type="text" name="microruta" required="required"/></div>

	<div class="element-input"><label class="title"><strong>Macro-Ruta</strong><span class="required">*</span></label><input class="small" type="text" name="macroruta" required="required"/></div>


	<div class="element-input"><label class="title"><strong>Barrio</strong><span class="required">*</span></label><input class="large" type="text" name="barrio" required="required"/></div>


	<div class="element-input"><label class="title"><strong>Direccion</strong><span class="required">*</span></label><input class="large" type="text" name="direccion" required="required"/></div>


	<div class="element-file"><label class="title"><strong>Imagen</strong><span class="required">*</span></label><label class="large" ><div class="button">Seleccionar</div><input type="file" class="file_input" name="foto" required="required"/><div class="file_text">No seleccionado</div></label></div>

	<div class="element-input"><label class="title"><strong>Nombre de imagen</strong><span class="required">*</span></label><input class="large" type="text" name="nomfoto" required="required"/></div>






<div class="submit"><input type="submit" value="Registrar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">html forms</a> Formoid.com 2.9</p><script type="text/javascript" src="barrido_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
