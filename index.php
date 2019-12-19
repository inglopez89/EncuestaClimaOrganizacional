<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingrese usuario y contraseña</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="contenedorini">
<div id="header1">
</div>
<h2 align="center">!!Bienvenidos a esta Nuestra encuesta!!</h2>
<h3 align="center">CLIMA ORGANIZACIONAL OPTICENTRO</h3>
<p align="center"><i>Nuestro interes es conocer su opinión y desarrollar estrategias de mejoramiento que permitan un nivel de Clima sano y un ambiente laboral agradable para Usted. Gracias por su participacion y conciente analisis en esta valoracion de clima Organizacional.</i></p> 
<br />
<p align="center"><i>Por favor inicie sesion para empezar</i></p>
<div id="inicio">
<form  id="form" name="form" action="ldap.php" method="post">
<table width="208">
<?php if($_GET['errorusuario']="1"){
	echo'<span class="error#" style="background-color:#B00">No ha ingresado nada aun</span>';
	}
	else{
		echo'<span class="error#">introdusca usuario"</span>';
		}
?>
<td width="85"><label>Usuario:</label></td>
<td width="111">
<span id="sprytextfield1">
<input type="text" size="15" id="user" name="user" />
<span class="textfieldRequiredMsg">Debe ingresar usuario.</span></span></td>
</tr>
<tr>
<td><label>Password:</label></td>
<td>
<span id="sprytextfield2">
<input type="password"  size="15" id="pass" name="pass"/>
</td> 
</tr>
</table>
<center><input type="submit" value="Ingresar" /></center>
<span id="resultados"></span>
</form>
</div>
<div id="pie"><center>Copyringht &copy;2011</center>
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
