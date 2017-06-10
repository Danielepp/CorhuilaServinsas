<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM disposicion WHERE id = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['verificacion'], 
				1 => $valores2['observacion'], 
				2 => $valores2['fecha'], 
				3 => $valores2['foto'],
				);
echo json_encode($datos);
?>