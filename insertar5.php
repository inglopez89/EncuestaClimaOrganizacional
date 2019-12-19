<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require('conexion.php');
$_SESSION['user'];
$user1=$_SESSION['user'];
$res1=$_REQUEST['res1'];
$obser1=$_REQUEST['obser1'];
$res2=$_REQUEST['res2'];
$obser2=$_REQUEST['obser2'];
$res3=$_REQUEST['res3'];
$obser3=$_REQUEST['obser3'];
$res4=$_REQUEST['res4'];
$obser4=$_REQUEST['obser4'];
$res5=$_REQUEST['res5'];
$obser5=$_REQUEST['obser5'];
if($conex){
mysql_select_db("encuesta",$conex);
$query_item=mysql_query("INSERT INTO item6(user,pregunta1,obser1,pregunta2,obser2,pregunta3,obser3,pregunta4,obser4,pregunta5,obser5) 
VALUES('$user1','$res1','$obser1','$res2','$obser2','$res3','$obser3','$res4','$obser4','$res5','$obser5')");
	
	}

else{
	echo "no se pudo conectar a la base de datos";
	
	}
if($query_item){
	
	echo"bien";
	}
	else {
		echo"mal";
		}		
?>
