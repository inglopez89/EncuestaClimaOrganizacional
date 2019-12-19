<?php
require('seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<title>Servicio, Apoyo y orientación del nivel central en su labor </title>
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/enviar1.js"></script>
</head>
<body>
<div id="header">
</div>
<div id="contenedor">
<form name="form" id="form" method="post" onSubmit="return validacion(this)" action="insertar1.php">
<p><i><h2>Servicio, Apoyo y orientación del nivel central en su labor
</h2></i>
<p><i>1).El Area comercial ha estado</i></p>
<input type="radio" name="res1" value="presente" id="radio1" checked="checked"/>presente
<br />
<input type="radio" name="res1" value="si/no depende" id="radio2">Si/no depende 
<br>   
<input ty type="radio" name="res1" value="ausente" id="radio3" />
Ausente
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser1" id="obser1"></textarea>
<p><i>2).El Area de mercadeo,venta institucional y servicio ha estado</i></p>
<input type="radio" name="res2"  id="radio4" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res2" id="radio5" value="si/no depende"/>Si/no depende
<br>
<input type="radio" name="res2" id="radio6" value="ausente"/>Ausente
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser2" id="obser2"></textarea>
<p><i>3).El Area Gestion Humana ha estado</i></p>
<p>
<input type="radio" name="res3" id="radio7" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res3" id="radio8" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res3" id="radio9" value="ausente"/>Ausente
<BR />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser3" id="obser3"></textarea>
<p><i>4).El Area Laboratorio optico ha estado </i></p>
<p>
<input type="radio" name="res4" id="radio10" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res4" id="radio11" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res4" id="radio12" value="ausente"/>Ausente
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser4" id="obser4"></textarea>
<BR />

<p><i>5).El Area, Almacen de monturas ha estado</i></p>
<p>
<input type="radio" name="res5" id="radio14" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res5" id="radio15" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res5" id="radio16" value="ausente"/>Ausente
<br />
<textarea rows="5" cols="50" name="obser5" id="obser5"></textarea>
<br />
<p><i>6).El Area, Almacen Lentes de contacto ha estado</i></p>
<input type="radio" name="res6" value="presente" id="radio17" checked="checked"/>Presente
<br />
<input type="radio" name="res6" value="si/no depende" id="radio18">Si/no depende 
<br>   
<input ty type="radio" name="res6" value="ausente" id="radio19" />Ausente
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser6" id="obser6"></textarea>
<br />
<p><i>7).El Area de Control interno ha Estado</i></p>
<input type="radio" name="res7"  id="radio20" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res7" id="radio21" value="si/no depende"/>Si/no depende
<br>
<input type="radio" name="res7" id="radio22" value="ausente"/>Ausente
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<br />
<textarea rows="5" cols="50" name="obser7" id="obser7"></textarea>
<br />
<p><i>8).El Area de Facturacion y Cartera ha estado</i></p>
<p>
<input type="radio" name="res8" id="radio23" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res8" id="radio24" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res8" id="radio25" value="ausente"/>Ausente
<BR />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser8" id="obser8"></textarea>
<p><i>9).El Area de Tecnologia y Sistemas ha estado</i></p>
<p>
<input type="radio" name="res9" id="radio26" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res9" id="radio27" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res9" id="radio28" value="ausente"/>Ausente
<br />
<p><i>Observaciones y/o sugerencias</i></p>
<textarea rows="5" cols="50" name="obser9" id="obser9"></textarea>
<BR />
<p><i>10).El Area Administrativa Y Financiera ha estado </i></p>
<p>
<input type="radio" name="res10" id="radio29" value="presente" checked="checked"/>Presente
<br />
<input type="radio" name="res10" id="radio30" value="si/no depende"/>Si/no depende
<br />
<input type="radio" name="res10" id="radio31" value="ausente"/>Ausente
<br />
<textarea rows="5" cols="50" name="obser10" id="obser10"></textarea>
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
