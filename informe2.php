<?php
include "libchart/classes/libchart.php";
require ('conexion.php');
if($conex){
	$totali1p2s=mysql_query("select count(*) from encuesta.item1 where pregunta2='si'");
	$totali1p2s=mysql_result($totali1p2s,0);
	$totali1p2sn=mysql_query("select count(*) from encuesta.item1 where pregunta2='si/no depende'");
	$totali1p2sn=mysql_result($totali1p2sn,0);
	$totali1p2n=mysql_query("select count(*) from encuesta.item1 where pregunta2='no'");
	$totali1p2n=mysql_result($totali1p2n,0);
	}
	header("Content-type: image/png");
	$chart = new PieChart(500, 260);
    $chart->setTitle("Resultados pregunta2");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Si han dicho($totali1p2s) personas", $totali1p2s));
	$dataSet->addPoint(new Point("si / no depende han dicho($totali1p2sn)personas",       $totali1p2sn));
	$dataSet->addPoint(new Point("No han dicho($totali1p2n) personas", $totali1p2n));
	$chart->setDataSet($dataSet);
	$chart->render();
?>