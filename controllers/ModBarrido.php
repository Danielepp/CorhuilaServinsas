<?php 
	
	require('conexion.php');

	$fecha =$_POST['fecha'];
	$id=$_POST['id'];
	$macroruta=$_POST['macroruta'];
	$nombreope=$_POST['nombreope'];
	$microruta=$_POST['microruta'];
	$direccion=$_POST['direccion'];
	$barrio=$_POST['barrio'];

	
		
	$query="UPDATE barrido SET fecha='$fecha', macroruta='$macroruta', microruta='$microruta', nombreope='$nombreope', direccion='$direccion', barrio='$barrio' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Registro</title>
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
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../vistas/index.php"><div class="title"><h2>Registro Modificado</h2></div>
<div class="submit"><input type="submit" value="Regresar"/></div></form><p class="frmd">
<!-- Stop Formoid form-->


				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Registro</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			
			
		</center>
	</body>
</html>
				
				