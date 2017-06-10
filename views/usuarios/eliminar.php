<?php 
	
	require('../../controllers/conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM user WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar usuario</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<body class="blurBg-false" style="background-color:#EBEBEB">
			<!-- Start Formoid form-->
<link rel="stylesheet" href="eliminar_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="eliminar_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="index.php"><div class="title"><h2>Usuario Eliminado</h2></div>
<div class="submit"><input type="submit" value="Regresar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form validation</a> Formoid.com 2.9</p><script type="text/javascript" src="eliminar_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			

			
		</center>
	</body>
</html>