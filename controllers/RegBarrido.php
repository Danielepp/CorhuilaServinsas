<?php 
	
	require('conexion.php');
	
	$nombreope=$_POST['nombreope'];
	$microruta=$_POST['microruta'];
    	$macroruta=$_POST['macroruta'];
	$direccion=$_POST['direccion'];
	$barrio=$_POST['barrio'];
	$fecha =$_POST['fecha'];
	$nomfoto=$_REQUEST["nomfoto"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="../subir_foto/barrido/barrido".$foto;
copy($ruta,$destino);


	
	$query="INSERT INTO barrido (fecha,nombreope,microruta,macroruta,direccion,barrio,foto,nombrefoto) VALUES ('$fecha','$nombreope','$microruta','$macroruta','$direccion','$barrio','$destino','$nomfoto')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar Recoleccion y transporte</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				

				<body background="../images/login.jpg">
			<!-- Start Formoid form-->
			<br>
			<br>
			<br>
<link rel="stylesheet" href="eliminar_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="eliminar_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../barrido.php"><div class="title"><h2>Registro Guardado</h2></div>
<div class="submit"><input type="submit" value="Regresar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form validation</a> Formoid.com 2.9</p><script type="text/javascript" src="eliminar_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->




				<?php }else{ ?>
				<h1>Error al Guardar Registro</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			
			
		</center>
	</body>
	</html>	