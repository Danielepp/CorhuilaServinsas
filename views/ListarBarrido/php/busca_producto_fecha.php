<?php
include('conexion.php');

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

$registro = mysql_query("SELECT * FROM controlredpiezometria WHERE fecha BETWEEN '$desde' AND '$hasta' ORDER BY fecha DESC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	  <tr>
			                <th width="150">Fecha</th>
			                <th width="150">Sector</th>
                      		<th width="60">Hora</th>
			                <th width="150">Elaboro</th>
			                <th width="150">No. De Piezometria</th>
			                <th width="150">Profundidad</th>
			                <th width="50">Observaciones</th>
                      		<th width="50">Opciones</th>


			            </tr>';
				
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
							<td><center>'.$registro2['fecha'].'</center></td>
							<td><center>'.$registro2['sector'].'</center></td>
              				<td><center>'.$registro2['hora'].'</center></td>
							<td><center>'.$registro2['elaboro'].'</center></td>
							<td><center>'.$registro2['nopiezometro'].'</center></td>
							<td><center>'.$registro2['profundidad'].'</center></td>
							<td><center>'.$registro2['observaciones'].'</center></td>
						
							<td><center>
              <a href="javascript:eliminarProducto('.$registro2['id'].');" class="glyphicon glyphicon-remove-circle"></a></td>
						 </center> </tr>';			
	}
        

}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>