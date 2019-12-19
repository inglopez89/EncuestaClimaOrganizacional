<?php
ob_start("ob_gzhandler");
session_start();
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$servidor_dominio = "OPTICENTRO.COM.CO";
$ldap_dn = "dc=OPTICENTRO,dc=com";
$usuario_LDAP=$user;
$contrasena_LDAP=$pass;
$myconeccion =ldap_connect ("SERV-OPTICENTRO");
if ($myconeccion){
	echo"se ha conectado corectamente al servidor";	
}
else {
	
	echo "error al conectar al servidor";
	}

$autenticado=ldap_bind($myconeccion,$usuario_LDAP."@".$servidor_dominio,$contrasena_LDAP);
if($autenticado){
   $_SESSION['autenticado']="si";
   $_SESSION['user']=$_REQUEST['user'];
   $_SESSION['pass']=$_REQUEST['pass'];
   header('location: pagina1.php');
	echo"su usarioes: ".$_SESSION['user'];
			}
		
		else {
 $_SESSION['autenticado']="no";
			header('location: index.php?errorusuario=1');
			
			}
	ob_end_flush();		

?>