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
	<title>Recoleccion y transporte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="../../../images/login.jpg">



<!-- Start Formoid form-->
<link rel="stylesheet" href="recoleccion_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="recoleccion_files/formoid1/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#000000;max-width:480px;min-width:150px" method="post"action="../controllers/RegRecoleccion.php"><div class="title"><center><img  src="../images/transporte.png" width="50" height="50"><center><strong><h2>Recoleccion y transporte</strong><center></div>

<div class="element-date"><label class="title">Fecha<span class="required">*</span></label><input class="large" data-format="yyyy-mm-dd" type="date" name="fecha" required="required" placeholder="yyyy-mm-dd"/></div>
	<div class="element-input"><label class="title">Vehiculo<span class="required">*</span></label><input class="small" type="text" name="vehiculo" required="required"/></div>

	<div class="element-input"><label class="title">Placa<span class="required">*</span></label><input class="small" type="text" name="placa" required="required"/></div>

	<div class="element-input"><label class="title">Direccion<span class="required">*</span></label><input class="large" type="text" name="direccion" required="required"/></div>


	<div class="element-input"><label class="title">Barrio<span class="required">*</span></label><input class="large" type="text" name="barrio" required="required"/></div>


	

	


<div class="submit"><input type="submit" value="Registrar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">bootstrap form</a> Formoid.com 2.9</p><script type="text/javascript" src="recoleccion_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
