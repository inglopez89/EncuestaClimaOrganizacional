<?php
include "libchart/classes/libchart.php";
require ('conexion.php');
$opc=$_REQUEST['opc'];
if($conex){
if($opc==1){
	if($conex){
	$totali1p1s=mysql_query("select count(*) from encuesta.item1 where pregunta4= 'inferior a 1 año' ");
	$totali1p1s=mysql_result($totali1p1s,0);
	$totali1p1sn=mysql_query("select count(*) from encuesta.item1 where pregunta4= 'entre 1 y 3 años' ");
	$totali1p1sn=mysql_result($totali1p1sn,0);
	$totali1p1n=mysql_query("select count(*) from encuesta.item1 where pregunta4='nunca lo he pensado' ");
	$totali1p1n=mysql_result($totali1p1n,0);
	$totali1p4p=mysql_query("select count(*) from encuesta.item1 where pregunta4='mas de 3 años'");
	$totali1p4p=mysql_result($totali1p4p,0);
	}
	header("Content-type: image/jpg");
	$chart = new PieChart(700, 300);
        $chart->setTitle("Cuanto tiempo espera estar en la empresa");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Inferior a 1 año($totali1p1s) personas", $totali1p1s));
	$dataSet->addPoint(new Point("Entre 1 y 3 años han dicho($totali1p1sn) personas",$totali1p1sn));
	$dataSet->addPoint(new Point("Nunca lo he pensado han dicho($totali1p1n) personas", $totali1p1n));
	$dataSet->addPoint(new Point("Mas de 3 años han dicho($totali1p4p) personas", $totali1p4p));
	$chart->setDataSet($dataSet);
	$chart->render("imagenes/cuanempre.jpg");
	}
else{
	$totali1p1s=mysql_query("select count(*) from encuesta.item1 where pregunta4= 'inferior a 1 año' and user like '$opc%'");
	$totali1p1s=mysql_result($totali1p1s,0)
        $totali1p1sn=mysql_query("select count(*) from encuesta.item1 where pregunta4= 'entre 1 y 3 años' and user like '$opc%'");
	$totali1p1sn=mysql_result($totali1p1sn,0);
        $totali1p1n=mysql_query("select count(*) from encuesta.item1 where pregunta4='nunca lo he pensado' and user like '$opc%'");
	$totali1p1n=mysql_result($totali1p1n,0);
	$totali1p4p=mysql_query("select count(*) from encuesta.item1 where pregunta4='mas de 3 años' and user like '$opc%' ");
	$totali1p4p=mysql_result($totali1p4p,0);
	}
	header("Content-type: image/jpg");
	$chart = new PieChart(700, 300);
        $chart->setTitle("Cuanto tiempo espera estar en la empresa");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Inferior a 1 año han dicho($totali1p1s) personas", $totali1p1s));
	$dataSet->addPoint(new Point("Entre 1 y 3 años  han dicho($totali1p1sn)personas",$totali1p1sn));
	$dataSet->addPoint(new Point("Nunca lo he pensado han dicho($totali1p1n) personas", $totali1p1n));
	$dataSet->addPoint(new Point("Mas de 3 años han dicho($totali1p4p) personas", $totali1p4p));
	$chart->setDataSet($dataSet);
	$chart->render("imagenes/cuanempre.jpg");
}
?>

