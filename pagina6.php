﻿<?php
require('seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sobre su puesto de trabajo</title>
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/enviar5.js"></script>
</head>
<body>
<div id="header">
</div>
<div id="contenedor">
<form name="form" id="form" method="post" onSubmit="return validacion(this)" action="insertar5.php">
<p><i>
<h2>Sobre su puesto de trabajo</h2></i>
<p><i>1).¿El puesto que ocupa en la empresa está en relación con la experiencia que usted posee?</i></p>
<input type="radio" name="res1" value="si" id="radio1" checked="checked"/>Si
<br />
<input type="radio" name="res1" value="si/no depende" id="radio2">No/si depende 
<br>   
<input ty type="radio" name="res1" value="no" id="radio3" />
Ausente
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser1" id="obser1"></textarea>
<p><i>2).¿Su puesto está en relación con su titulación académica?</i></p>
<input type="radio" name="res2"  id="radio4" value="si" checked="checked"/>Si
<br />
<input type="radio" name="res2" id="radio5" value="si/no depende"/>Si/no depende
<br>
<input type="radio" name="res2" id="radio6" value="no"/>No
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser2" id="obser2"></textarea>
<p><i>3).¿Se considera usted valorado por el puesto de trabajo que ocupa?</i></p>
<p>
<input type="radio" name="res3" id="radio7" value="si" checked="checked"/>Si
<br />
<input type="radio" name="res3" id="radio8" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res3" id="radio9" value="no"/>No
<BR />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser3" id="obser3"></textarea>
<p><i>4).¿Considera que su trabajo está suficientemente reconocido y considerado por su jefe o superiores?</i></p>
<p>
<input type="radio" name="res4" id="radio10" value="si" checked="checked"/>Si
<br />
<input type="radio" name="res4" id="radio11" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res4" id="radio12" value="no"/>No
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser4" id="obser4"></textarea>
<BR />

<p><i>5).¿Le gustaría permanecer en su puesto de trabajo dentro de su empresa?</i></p>
<p>
<input type="radio" name="res5" id="radio14" value="si" checked="checked"/>Si
<br />
<input type="radio" name="res5" id="radio15" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res5" id="radio16" value="no"/>No
<br />
<textarea rows="5" cols="50" name="obser5" id="obser5"></textarea>
<br />
<p><center><input type="submit" value="Enviar >>" onclick="return confirm('esta segur@ de que desea enviar los datos? sino es asi por favor vea paginas y dirijase a la que desea y de cancelar a este mensaje Gracias');"></center></p>
<span id="resultados"></span>
</form>
<div id="pie">
<center><h3><i>Paginas</i></h3></center>
<center>
<p>[<a href="pagina1.php"><i>1</i></a>-<a href="pagina2.php"><i>2</i></a>-<a href="pagina3.php"><i>3</i></a>-<a href="pagina4.php"><i>4</i></a>-<a href="pagina5.php"><i>5</i></a>-<a href="pagina6.php"><i>6</i></a>-<a href="pagina7.php"><i>7</i></a>-<a href="pagina8.php"><i>8</i></a>-<a href="pagina9.php"><i>9</i></a>]</p>
</center>
<center><h3><i><a href="final.php" id="cs" onclick="return confirm('Si cierra sesion y no ha enviado los datos estos no seran alamacenados desea salir?');">Cerrar Sesion</a></i></h3></center>
<center>Copyringht &copy;2011</center></div>
</div>
</body>
</html>
