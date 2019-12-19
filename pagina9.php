<?php
require('seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Valoración general de la Clinica Oftalmologica </title>
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/enviar8.js"></script>
</head>
<body>
<div id="header">
</div>
<div id="contenedor">
<form name="form" id="form" method="post" action="insertar8.php">
<p><i>
<h2>Valoración general de la Clinica Oftalmologica
</h2></i>
<p><i>1).Tiene conocimiento total de los servicios prestados por nuestra clinica oftalmológica?</i></p>
<input type="radio" name="res1" value="si" id="radio1" checked="checked"/>Si
<br />
<input type="radio" name="res1" value="si/no depende" id="radio2">
Si/no depende <br>   
<input ty type="radio" name="res1" value="no" id="radio3" />
No
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser1" id="obser1"></textarea>
<p><i>2).Cuales han sido las dificultades mas frecuentes al remitir pacientes a nuestra clinica?</i></p>
<br />
<textarea rows="5" cols="50" name="obser2" id="obser2"></textarea>
<br />
<p><i>3).Cuales han sido los aspectos positivos  al remitir pacientes a nuestra clinica?</i></p>
<br />
<textarea rows="5" cols="50" name="obser3" id="obser3"></textarea>
<br />
<p><i>4).Que servicios Sugiere podriamos ofertar en nuestras clinica que necesiten sus pacientes?</i></p><br />
<textarea rows="5" cols="50" name="obser4" id="obser4"></textarea>
<BR />
<p><center><input type="submit" value="Enviar >>" onclick="return confirm('esta segur@ de que desea enviar los datos? sino es asi por favor vea paginas y dirijase a la que desea y de cancelar a este mensaje Gracias');" ></center></p>
</form>
<div id="pie">
<center><h3><i>Paginas</i></h3></center>
<center>
<p>[<a href="pagina1.php"><i>1</i></a>-<a href="pagina2.php"><i>2</i></a>-<a href="pagina3.php"><i>3</i></a>-<a href="pagina4.php"><i>4</i></a>-<a href="pagina5.php"><i>5</i></a>-<a href="pagina6.php"><i>6</i></a>-<a href="pagina7.php"><i>7</i></a>-<a href="pagina8.php"><i>8</i></a>-<a href="pagina9.php"><i>9</i></a>]</p>
</center>
<center><h3><i><a href="final.php" id="cs" onclick="return confirm('Si cierra sesion y no ha enviado los datos estos no seran alamacenados desea salir?');">Cerrar Sesion</a></i></h3></center>
<center>Copyringht &copy;2011</center>
</div>
</div>
</body>
</html>
