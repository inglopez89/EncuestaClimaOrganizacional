﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="ajax/informe3.js"></script>
</head>
<body>
<center><p><h3>Valoración de orgullo y sentido de pertenencia a la Empresa</h3></p></center>
<center><h4>¿se ve proyectado en la empresa?</h4></center>
<center>
<p><h4>Seleccione sobre que usuario desea obtener el informe </h4></p></center>
<div>
<center>
<form name="form1" id="form1" method="post" onSubmit="return validacion(this)" action="informe3.php">
<select name="opc">
<option value="1" id="general" selected="selected">General</option>
<option value="r" id="opc1">Asesores</option>
<option value="c" id="opc2">Optometras</option>
</select>
<input type="submit" value="Ver" />
</form>
<span id="resultados2"></span>
</center>
<br />
</div>
</body>
</html>