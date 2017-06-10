<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../Login.html';</script>";
}
if($_SESSION["cargo"] < 3){
	print "<script>alert(\"No tienes privilegios para registrar usuarios!\");window.location='../index.php';</script>";
}


	require("../../php/conexion.php");
	$con=ConexionDB();
	$query="select * from user inner join cargos on user.cargo_id=cargos.cargo_id";

	$resultado=$con->query($query);
	
?>

<html>
	<head>
		<title>Usuarios</title>
<style type="text/css">


/* Datagrid */
	body {
  font: normal medium/1.4 sans-serif;
  background-image: url("../..//images/login.jpg")( 0deg, #C0C0C0 , #F8F8F8);}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
.centro{
  padding: 0.5rem;
  background: #484848 ;
  color: white;
  text-align: center;
  font-size: 21px;

}

#cuadro{
	width: 90%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
	background: #282828;
	color:white;

}
	</style>
	</head>
	
	<body background="../../images/login.jpg">
	<div id="cuadro">
		<center><a class="navbar-brand" href="nuevo.php"><img  src="../../images/agregar.png" width="80" height="80"></a><br>
		
		
		<div id="titulo">
		<center><h1>Usuarios Registrados</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="centro">
					<td>Cedula</td>
					<td>Nombre</td>
					<td>Usuario</td>
					<td>Contraseña</td>
					<td>Email</td>
					<td>Cargo</td>
					<td>Modificar</td>
					<td>Eliminar</td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['fullaname'];?>
							</td>
							<td>
								<?php echo $row['username'];?>
							</td>
							<td>
								<?php echo $row['password'];?>
							</td>
							<td>
								<?php echo $row['email'];?>
							</td>
							<td>
								<?php echo $row['cargo'];?>
							</td>
							<td>
								
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>	
			</center

			
		</div>
		</body>
	</html>	
	
