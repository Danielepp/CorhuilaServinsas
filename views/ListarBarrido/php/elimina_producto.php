<?php
include('conexion.php');

$id = $_POST['id'];

//ELIMINAMOS EL PRODUCTO

mysql_query("DELETE FROM barrido WHERE id = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM barrido ORDER BY fecha DESC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
			                <th width="150">Nombre de Operario</th>
			              <th width="30">Macro-Ruta</th>
						    <th width="60">Micro-Ruta</th>
			                
			                <th width="150">Barrio</th>
			                <th width="150">Direccion</th>
			                <th width="150">Imagen</th>
			              
			              
			                <th width="150">Fecha Registro</th>
			                <th width="50">Opciones</th>
			            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombreope'].'</td>
				<td>'.$registro2['macroruta'].'</td>
							<td>'.$registro2['microruta'].'</td>
							
							<td>'.$registro2['barrio'].'</td>
							<td>'.$registro2['direccion'].'</td>
							
							<td><img src="../interaseo/'.$registro2['foto'].'" width="300" heigth="300"></td>
							<td>'.fechaNormal($registro2['fecha']).'</td>
				<td>
				  <a href="../php/edita_producto.php?id='.$registro2['id'].'" class="glyphicon glyphicon-edit"></a>
				 <a href="javascript:eliminarProducto('.$registro2['id'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>