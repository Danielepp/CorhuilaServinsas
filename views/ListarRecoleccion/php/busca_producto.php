<?php
include('conexion.php');
$val = $_POST['val'];
$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

//EJECUTAMOS LA CONSULTA DE BUSQUEDA


 $registro = mysql_query("SELECT * FROM barrido WHERE recoleccion BETWEEN '$desde' AND '$hasta' AND  vehiculo LIKE '%$val%' ORDER BY fecha DESC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
			                <th width="60">Vehiculo</th>
			                <th width="60">Placa</th>
			                <th width="150">Direccion</th>
			                <th width="150">Barrio</th>
			                 <th width="150">Fecha Registro</th>
			                <th width="50">Opciones</th>
			            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
							
							<td>'.$registro2['vehiculo'].'</td>
							<td>'.$registro2['placa'].'</td>
							<td>'.$registro2['direccion'].'</td>
							<td>'.$registro2['barrio'].'</td>
							<td>'.$registro2['fecha'].'</td>
				<td> 
				 <a href="../php/edita_producto.php?id='.$registro2['id'].'" class="glyphicon glyphicon-edit"></a>
				<a href="javascript:eliminarProducto('.$registro2['id'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>