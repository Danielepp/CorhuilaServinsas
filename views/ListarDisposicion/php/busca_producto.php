<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM disposicion WHERE observacion LIKE '%$dato%' OR titulo LIKE '%$dato%' ORDER BY fecha DESC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	 <th width="100">titulo</th>
			                <th width="300">Observacion</th>
			       
			                <th width="150">Fecha Registro</th>
			                <th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['titulo'].'</td>
				<td> '.$registro2['observacion'].'</td>

				<td>'.fechaNormal($registro2['fecha']).'</td>
				<td> <a href="javascript:eliminarProducto('.$registro2['id'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>