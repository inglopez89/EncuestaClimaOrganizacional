<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="css/enestilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a {
	font-size: 12px;
}
</style>
</head>
<title>informe</title>
<body>
<div id="header"></div>
<div id="contenedor">
<br />
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Valoracion y sentido de pertenencia</li>
    <li class="TabbedPanelsTab" tabindex="0">Ficha 2</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <div id="Accordion1" class="Accordion" tabindex="0">
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">¿Legusta su empresa?</div>
          <div class="AccordionPanelContent">
          <iframe src="info1.php" height="550px" width="795px" frameborder="0"></iframe>
          </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">¿Si pudiera dejar la empresa por otro trabajo, a igualdad de sueldo y condiciones, se quedaría en la empresa?</div>
          <div class="AccordionPanelContent">
                <iframe src="info2.php" height="550px" width="795px" frameborder="0"></iframe>
          </div>
        </div>
      <div class="AccordionPanel">
      <div class="AccordionPanelTab">¿Si se ve proyectado en la empresa?</div>
      <div class="AccordionPanelContent"> <iframe src="info3.php" height="550px" width="795px" frameborder="0"></iframe></div>
      </div>
      <div class="AccordionPanel">
      <div class="AccordionPanelTab">¿Tiempo que espera estar en la empresa?</div>
      <div class="AccordionPanelContent"><iframe src="info4.php" height="550px" width="795px" frameborder="0"></iframe></div>
      </div>
      <div class="AccordionPanel">
      <div class="AccordionPanelTab">¿Siente que lo valoran y escuchan en la empresa?</div>
      <div class="AccordionPanelContent"><iframe src="info5.php" height="550px" width="799px" frameborder="0"></iframe></div>
      
      </div>
      </div>
    </div>
    <div class="TabbedPanelsContent">Contenido 2 panel </div>
  </div>
</div>
<div id="pie"><center><p><I>Copyright&copy;2011 by C</I></p></center></div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>