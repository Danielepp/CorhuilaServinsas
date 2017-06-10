<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../Login.html';</script>";
}
if($_SESSION["cargo"] < 3){
	print "<script>alert(\"No tienes privilegios para registrar usuarios!\");window.location='../usuarios/index.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Registrar Usuario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="../../images/login.jpg">



<!-- Start Formoid form-->
<link rel="stylesheet" href="nuevo_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="nuevo_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../../controllers/guarda_usuario.php"><div class="title"><img  src="../../images/agregar.png" width="50" height="50"><center><h2>Registrar Usuario</h2><center></div>


	<div class="element-number"><label class="title">Cedula<span class="required">*</span></label><input class="large" type="number" min="0" max="999999999999" name="id" required="required" value=""/></div>

	<div class="element-input"><label class="title">Nombre<span class="required">*</span></label><input class="large" type="text" name="nombre" required="nombre"/></div>


<div class="element-select" title="Elija un cargo"><label class="title">Cargo<span class="required">*</span></label><div class="large"><span><select name="cargo" required="required">

	
	
			<option value="4">Inspector</option>
			<option value="5">Supervisor</option>
			<option value="6">Administrador</option>
	

			</select><i></i></span></div></div>




	<div class="element-input"><label class="title">Usuario<span class="required">*</span></label><input class="large" type="text" name="usuario" required="required"/></div>

	<div class="element-password"><label class="title">Password<span class="required">*</span></label><input class="large" type="password" name="password" value="" required="required"/></div>

	<div class="element-email"><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	
	
	
	<div class="submit"><input type="submit" value="Registrar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">form html</a> Formoid.com 2.9</p><script type="text/javascript" src="nuevo_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
