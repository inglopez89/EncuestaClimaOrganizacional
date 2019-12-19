// JavaScript Document
addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ref=document.getElementById('form');
  addEvent(ref,'submit',enviarDatos,false);
}

function enviarDatos(e)
{
  if (window.event)
    window.event.returnValue=false;
  else
    if (e)
      e.preventDefault();
  enviarFormulario();
}


function retornarDatos()
{
  var cad='';
    var obser1=document.getElementById('obser1').value;
	var obser2=document.getElementById('obser2').value;
	var obser3=document.getElementById('obser3').value;
if(document.getElementById('radio1').checked){
 var res1=document.getElementById('radio1').value;
  cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1);	
} 		 
else
if(document.getElementById('radio2').checked){
	var res1=document.getElementById('radio2').value;
	cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1);

}
else 
if(document.getElementById('radio3').checked){
  var res1=document.getElementById('radio3').value;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1);
	}
	
var res2=obser2;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2);
				
				if(document.getElementById('radio7').checked){
					var res3=document.getElementById('radio7').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3);
					
					}
					else
	if(document.getElementById('radio8').checked){
		var res3=document.getElementById('radio8').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3);
					}
					else
							if(document.getElementById('radio9').checked){
					var res3=document.getElementById('radio9').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3);
					}
					
			
	else{
		alert("no ingreso nada");
		}
return cad;
  /*cad='user='+encodeURIComponent(user)+'&pass='+encodeURIComponent(pass)+'&name='+encodeURIComponent(name)+'&Lname='+encodeURIComponent(Lname)+'&mail='+encodeURIComponent(mail)+'&phone='+encodeURIComponent(phone)+'&id='+encodeURIComponent(id)+'&comment='+encodeURIComponent(comment);
  return cad;*/
}

var conexion1;
function enviarFormulario() 
{
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('POST','insertar7.php', true);
  conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded  charset=utf-8");
  conexion1.send(retornarDatos());  
}

function procesarEventos()
{
  var resultados = document.getElementById("resultados");
  var resultados1=document.getElementById("contenedor");
  if(conexion1.readyState == 4)
  {
    if (conexion1.status==200)
      resultados1.innerHTML = parent.location.href="pagina9.php";
    else
      alert(conexion1.statusText);
  } 
  else 
  {
    resultados.innerHTML = '<img src="./imagenes/cargando.gif">';
  }
}



//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}