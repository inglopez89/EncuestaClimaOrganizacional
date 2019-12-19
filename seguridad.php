<?php
session_start();
if($_SESSION['autenticado']!="si"){
   $_SESSION['user']=$_POST['user'];
   $_SESSION['pass']=$_POST['pass'];
	header('location: index.php');
	exit();
	}
session_cache_expire(5);
$cache_expire = session_cache_expire();

?>