<!DOCTYPE html>


<?php
	
	require('../../controllers/conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT  username, password, fullaname, email FROM user WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>


<html>
<head>
	<meta charset="utf-8" />
	<title>Modificar usuario </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="../../images/login.jpg">



<!-- Start Formoid form-->
<link rel="stylesheet" href="nuevo_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="nuevo_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../../controllers/mod_usuario.php">
<div class="title"><img  src="../../images/editar.ico" width="50" height="50"> <center><h2>Modificar Usuario </h2></center></div>


	<input type="hidden" name="id" value="<?php echo $id; ?>">

	

	<div class="element-input"><label class="title"><strong>Nombre</strong><span class="required">*</span></label><input class="large" type="text" name="nombre" required="nombre"  value="<?php echo $row['fullaname']; ?>"/></div>

	<div class="element-input"><label class="title"><strong>Usuario</strong><span class="required">*</span></label><input class="large" type="text" name="usuario" required="required"    value="<?php echo $row['username']; ?>"/></div>

	<div class="element-select" title="Elija un cargo"><label class="title">Cargo<span class="required">*</span></label><div class="large"><span><select name="cargo" value="<?php echo $row['cargo_id']; ?>" required="required">


			<option value="4">Inspector</option>
			<option value="5">Supervisor</option>
			<option value="6">Administrador</option>
		


			</select><i></i></span></div></div>

	<div class="element-password"><label class="title"><strong>Password</strong><span class="required">*</span></label><input class="large" type="password" name="password" value="<?php echo $row['password']; ?>" required="required"/></div>

	<div class="element-email"><label class="title"><strong>Email</strong><span class="required">*</span></label><input class="large" type="email" name="email" value="<?php echo $row['email']; ?>" required="required"/></div>

	
	<div class="submit"><input type="submit" value="Modificar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">form html</a> Formoid.com 2.9</p><script type="text/javascript" src="nuevo_files/formoid1/formoid-metro-green.js"></script>

	
<!-- Stop Formoid form-->



</body>
</html>
