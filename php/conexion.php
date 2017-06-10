<?php  function  ConexionDB(){
$host="localhost";
$user="servin_root";//"servin_root";
$password="servin123";//"servin123";
$db="servin_corhuila";
$con = new mysqli($host,$user,$password,$db);
if($con->connect_errno)
echo "Problema de conexion DB" . $con->connect_errno;
else
return $con;
}
?>
