<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='Login.html';</script>";
}

?>
<html>
	<head>
		<title>Recoleccion y transporte</title>
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "../php/navbar.php"; ?>
	






<iframe width="100%" height="100%" src="../views/recoleccion.php"  scrolling="auto" frameborder="no"</iframe>
	

</div>
</div>
</div>
	</body>
</html>