<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require('conexion.php');
$_SESSION['user'];
$user1=$_SESSION['user'];
$res1=$_REQUEST['res1'];
$obser1=$_REQUEST['obser1'];
$res2=$_REQUEST['res2'];
$res3=$_REQUEST['res3'];
$res4=$_REQUEST['res4'];
if($conex){
mysql_select_db("encuesta",$conex);
$query_item=mysql_query("INSERT INTO item9(user,pregunta1,obser1,pregunta2,pregunta3,pregunta4) 
VALUES('$user1','$res1','$obser1','$res2','$res3','$res4')");
	
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