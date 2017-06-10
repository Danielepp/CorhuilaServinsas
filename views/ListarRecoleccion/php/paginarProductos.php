<?php
	include('conexion.php');
	$paginaActual = $_POST['partida'];

    $nroProductos = mysql_num_rows(mysql_query("SELECT * FROM recoleccion"));
    $nroLotes = 10;
    $nroPaginas = ceil($nroProductos/$nroLotes);
    $lista = '';
    $tabla = '';

    if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';
    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}

  	$registro = mysql_query("SELECT * FROM recoleccion ORDER BY fecha DESC LIMIT $limit, $nroLotes ");


  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover">
			           	<tr>
			                <th width="60">Vehiculo</th>
			                <th width="60">Placa</th>
			                <th width="150">Direccion</th>
			                <th width="150">Barrio</th>
			        
			              
			                <th width="150">Fecha Registro</th>
			                <th width="50">Opciones</th>
			            </tr>';
				
	while($registro2 = mysql_fetch_array($registro)){
		$tabla = $tabla.'<tr>
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
        

    $tabla = $tabla.'</table>';



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>