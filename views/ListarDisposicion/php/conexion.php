<?php
$conexion = mysql_connect('localhost', 'servin_root', 'servin123');
mysql_select_db('servin_corhuila', $conexion);

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}
?>