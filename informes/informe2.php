<?php
include "libchart/classes/libchart.php";
require ('conexion.php');
$opc=$_REQUEST['opc'];
if($conex){
if($opc==1){
	if($conex){
	$totali1p1s=mysql_query("select count(*) from encuesta.item1 where pregunta2='si' ");
	$totali1p1s=mysql_result($totali1p1s,0);
	$totali1p1sn=mysql_query("select count(*) from encuesta.item1 where pregunta2='si/no depende' ");
	$totali1p1sn=mysql_result($totali1p1sn,0);
	$totali1p1n=mysql_query("select count(*) from encuesta.item1 where pregunta2='no' ");
	$totali1p1n=mysql_result($totali1p1n,0);
	}
	header("Content-type: image/jpg");
	$chart = new PieChart(700, 300);
    $chart->setTitle("¿Si pudiera dejar la empresa por otro trabajo, a igualdad de sueldo y condiciones, se quedaría en la empresa?");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Si han dicho($totali1p1s) personas", $totali1p1s));
	$dataSet->addPoint(new Point("Si / no depende han dicho($totali1p1sn)personas",$totali1p1sn));
	$dataSet->addPoint(new Point("No han dicho($totali1p1n) personas", $totali1p1n));
	$chart->setDataSet($dataSet);
	$chart->render("imagenes/dejariasuem.jpg");
	}
else{
	$totali1p1s=mysql_query("select count(*) from encuesta.item1 where pregunta2='si' and user like '$opc%'");
	$totali1p1s=mysql_result($totali1p1s,0);
	$totali1p1sn=mysql_query("select count(*) from encuesta.item1 where pregunta2='si/no depende' and user like '$opc%'");
	$totali1p1sn=mysql_result($totali1p1sn,0);
	$totali1p1n=mysql_query("select count(*) from encuesta.item1 where pregunta2='no' and user like '$opc%'");
	$totali1p1n=mysql_result($totali1p1n,0);
        header("Content-type: image/jpg");
	$chart = new PieChart(700, 300);
        $chart->setTitle("¿Si pudiera dejar la empresa por otro trabajo, a igualdad de sueldo y condiciones, se quedaría en la empresa?");
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Si han dicho($totali1p1s) personas", $totali1p1s));
	$dataSet->addPoint(new Point("Si / no depende han dicho($totali1p1sn)personas",$totali1p1sn));
	$dataSet->addPoint(new Point("No han dicho($totali1p1n) personas", $totali1p1n));
	$chart->setDataSet($dataSet);
	$chart->render("imagenes/dejariasuem.jpg");	
}
	
}
?>

