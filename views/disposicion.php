<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../../Login.html';</script>";
}

?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Actividad Disposicion Final</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<body background="../../../images/login.jpg">



<!-- Start Formoid form-->
<link rel="stylesheet" href="disposicion_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="disposicion_files/formoid1/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../controllers/RegDisposicion.php"><div class="title"><h2>Actividad Disposicion Final</h2></div>


	<div class="element-date"><label class="title">Fecha*</label><input class="large" data-format="yyyy-mm-dd" type="date" name="fecha" placeholder="yyyy-mm-dd" required="required" /></div>
	<div class="element-input"><label class="title">Titulo*</label><input class="large" type="text" name="titulo" required="required" /></div>

	<div class="element-textarea"><label class="title">Observaciones*</label><textarea class="small" name="observaciones" cols="20" rows="5" required="required" ></textarea></div>

	
<div class="submit"><input type="submit" value="Registrar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">html5 form</a> Formoid.com 2.9</p><script type="text/javascript" src="disposicion_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
