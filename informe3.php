<?php
include "libchart/classes/libchart.php";
require ('conexion.php');
if($conex){
	$totali1p3s=mysql_query("select count(*) from encuesta.item1 where pregunta3='si'");
	$totali1p3s=mysql_result($totali1p3s,0);
	$totali1p3sn=mysql_query("select count(*) from encuesta.item1 where pregunta3='si/no depende'");
	$totali1p3sn=mysql_result($totali1p3sn,0);
	$totali1p3n=mysql_query("select count(*) from encuesta.item1 where pregunta3='no'");
	$totali1p3n=mysql_result($totali1p3n,0);
	}
	header("Content-type: image/png");
	$chart = new PieChart(500, 260);
    $chart->setTitle("Resultados pregunta3");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Si han dicho($totali1p3s) personas", $totali1p3s));
	$dataSet->addPoint(new Point("si/no depende han dicho($totali1p3sn)personas", $totali1p3sn));
	$dataSet->addPoint(new Point("No han dicho($totali1p3n) personas", $totali1p3n));
	$chart->setDataSet($dataSet);
	$chart->render();
?>