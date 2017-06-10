<?php

if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
	$hasta = $_GET['hasta'];

	$verDesde = date('d/m/Y', strtotime($desde));
	$verHasta = date('d/m/Y', strtotime($hasta));
}else{
	$desde = '1111-01-01';
	$hasta = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('../fpdf/fpdf.php');
require('conexion.php');

$pdf = new FPDF('P','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../../../images/ecoplus.png' , 10 ,8, 60 , 13,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, '', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'Reporte Actividades Barrido y Limpieza', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(100, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'Item', 1,0,'C');
$pdf->Cell(30, 8, 'Fecha', 1,0,'C');
$pdf->Cell(60, 8, 'Nombre de Operario', 1,0,'C');
$pdf->Cell(30, 8, 'Micro-Ruta', 1,0,'C');
$pdf->Cell(30, 8, 'Macro-Ruta', 1,0,'C');
$pdf->Cell(60, 8, 'Barrio', 1,0,'C');
$pdf->Cell(40, 8, 'Direccion', 1,0,'C');
$pdf->Cell(60, 8, 'Imagen', 1,0,'C');

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("SELECT * FROM barrido WHERE fecha BETWEEN '$desde' AND '$hasta' ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysql_fetch_array($productos)){
	$item = $item+1;
	$totaluni = $totaluni + $productos2['precio_unit'];
	$totaldis = $totaldis + $productos2['precio_dist'];
	$pdf->Cell(10, 28, $item, 1);
	$pdf->Cell(30, 28, $productos2['fecha'], 1,0,'C');
	$pdf->Cell(60, 28, $productos2['nombreope'], 1,0,'C');
	$pdf->Cell(30, 28, $productos2['microruta'], 1,0,'C');
	$pdf->Cell(30, 28, $productos2['macroruta'], 1,0,'C');
	$pdf->Cell(60, 28, $productos2['barrio'], 1,0,'C');
	$pdf->Cell(40, 28, $productos2['direccion'], 1,0,'C');
 $pdf->Cell(60,28, $pdf->Image(''.$productos2['foto'], $pdf->GetX(100), $pdf->GetY(100),35),1);

//	$pdf->Cell(70,28, $pdf->Image('../interaseo/'.$productos2['foto'], $pdf->GetX()+30, $pdf->GetY()+3, 50), 1,0,'C');

	

	$pdf->Ln();
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);

$pdf->Output('reporte.pdf','D');
?>