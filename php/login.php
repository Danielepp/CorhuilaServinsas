<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			require "conexion.php";
			$con=ConexionDB();
			$user_id=null;
			$user_name=null;
			$user_cargo=null;
			$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				$user_name=$r["fullaname"];
				$user_cargo=$r["cargo_id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido!!.\");window.location='../index.html';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["nombre"]=$user_name;
				$_SESSION["cargo"]=$user_cargo;
				print "<script>window.location='../index.php';</script>";				
			}
		}
	}
}



?>