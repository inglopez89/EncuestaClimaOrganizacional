<?php
include "libchart/classes/libchart.php";
require ('conexion.php');
if($conex){
	$totali1p1s=mysql_query("select count(*) from encuesta.item1 where pregunta1='si'");
	$totali1p1s=mysql_result($totali1p1s,0);
	$totali1p1sn=mysql_query("select count(pregunta1) from encuesta.item1 where pregunta1='si/no depende'");
	$totali1p1sn=mysql_result($totali1p1sn,0);
	$totali1p1n=mysql_query("select count(pregunta1) from encuesta.item1 where pregunta1='si'");
	$totali1p1n=mysql_result($totali1p1n,0);
	}
	header("Content-type: image/png");
	$chart = new PieChart(500, 260);
    $chart->setTitle("Resultados pregunta1");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Si han dicho($totali1p1s) personas", $totali1p1s));
	$dataSet->addPoint(new Point("si / no depende han dicho($totali1p1sn)personas",       $totali1p1sn));
	$dataSet->addPoint(new Point("No han dicho($totali1p1n) personas", $totali1p1n));
	$chart->setDataSet($dataSet);
	$chart->render();
?>