<?php
	
	//"localhost","servin_root","servin123","servin_interaseo"
	$mysqli=new mysqli("localhost","servin_root","servin123","servin_corhuila"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
