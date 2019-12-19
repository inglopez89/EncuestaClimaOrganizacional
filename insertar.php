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
$res4=utf8_decode($_REQUEST['res4']);
$res5=$_REQUEST['res5'];
$obser5=$_REQUEST['obser5'];
if($conex){
mysql_select_db("encuesta",$conex);
$query_item1=mysql_query("INSERT INTO item1(user,pregunta1,obser1,pregunta2,obser2,pregunta3,obser3,pregunta4,pregunta5,obser5) 
VALUES('$user1','$res1','$obser1','$res2','$obser2','$res3','$obser3','$res4','$res5','$obser5')");
	}

else{
	echo "no se pudo conectar a la base de datos";
	
	}
if($query_item1){
	
	echo"bien";
	echo"su usuario es :".$_SESSION['user'];
	echo"usuario:".$user1;
	}
	else {
		echo"mal";
		}
?>