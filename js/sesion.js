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
  var pass=document.getElementById('pass').value;
  var user=document.getElementById('user').value;
  var cad='';
  cad='&user='+encodeURIComponent(user)+'&pass='+encodeURIComponent(pass);
return cad;
  /*cad='user='+encodeURIComponent(user)+'&pass='+encodeURIComponent(pass)+'&name='+encodeURIComponent(name)+'&Lname='+encodeURIComponent(Lname)+'&mail='+encodeURIComponent(mail)+'&phone='+encodeURIComponent(phone)+'&id='+encodeURIComponent(id)+'&comment='+encodeURIComponent(comment);
  return cad;*/
}

var conexion1;
function enviarFormulario() 
{
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('POST','ldap.php', true);
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
      resultados1.innerHTML = parent.location.href="pagina1.html";
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