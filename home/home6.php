<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}
if($_SESSION["cargo"]<3)
	print "<script>alert(\"Requieres privilegios para acceder!\");window.location='Login.html';</script>";
?>
<html>
	<head>
		<title>Listar barrido</title>
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "../php/navbar.php"; ?>
	






<iframe width="100%" height="100%" src="../views/ListarBarrido/vistas/index.php"  scrolling="auto" frameborder="no"</iframe>
	

</div>
</div>
</div>
	</body>
</html>