<?php {

    session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../../Login.html';</script>";
}
if($_SESSION["cargo"] < 3){
	print "<script>alert(\"No tienes privilegios para registrar este formulario!\");window.location='../../index.php';</script>";
}
    require "../php/conexion.php";
    require "../models/Disposicion.php";

    $fecha = $_POST["fecha"];
    $titulo = $_POST["titulo"];
    $observaciones = $_POST["observaciones"];

	
   

    $objDisposicion = new Disposicion($fecha,$titulo,$observaciones);
    $insertar = $objDisposicion->Registrar();

	
}?>
   	<?php if($insertar>0){ ?>
				
			<body background="../images/login.jpg">
			<!-- Start Formoid form-->
<link rel="stylesheet" href="eliminar_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="eliminar_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../views/disposicion.php"><div class="title"><h2>Formulario Registrado</h2></div>
<div class="submit"><input type="submit" value="Regresar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form validation</a> Formoid.com 2.9</p><script type="text/javascript" src="eliminar_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->


				<?php }else{ ?>
	<body background="../images/login.jpg">
			<!-- Start Formoid form-->
<link rel="stylesheet" href="eliminar_files/formoid1/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="eliminar_files/formoid1/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" action="../views/disposicion.php"><div class="title"><h2>Formulario No Registrado</h2></div>
<div class="submit"><input type="submit" value="Regresar"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form validation</a> Formoid.com 2.9</p><script type="text/javascript" src="eliminar_files/formoid1/formoid-metro-green.js"></script>
<!-- Stop Formoid form-->

					
		<?php	} ?>		
			
		
		</center>
	</body>
	</html>	

    


