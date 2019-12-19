
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingrese usuario y contraseña</title>
</head>
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<body>
<div id="inicio">
<form  id="form" name="form" action="ldap.php" method="post">
<table width="202">
<?php if($_GET['errorusuario']=1){
	echo'<span class="error#">No ha ingresado nada aun</span>';
	}
	else{
		echo"introdusca usuario";
		}
?>
<tr>
<tr>
<td><span class="error#">Ingrese datos</span></td>
</tr>
<td width="195" >Usuario:<input type="text" size="15" id="user" name="user" /></td>
<td></td>
</tr>
<tr>
<td>
Password: <input type="password"  size="10" id="pass" name="pass"/>
</td> 
</tr>
<tr>
<td>
<center><input type="submit" value="Ingresar" /></center>
<span id="resultados"></span>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
