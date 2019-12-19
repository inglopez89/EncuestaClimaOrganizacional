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
	var obser4=document.getElementById('obser4').value;
	var obser5=document.getElementById('obser5').value;
	var obser6=document.getElementById('obser6').value;
	var obser7=document.getElementById('obser7').value;
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
	
	if(document.getElementById('radio4').checked){
		var res2=document.getElementById('radio4').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2);
		
		}
		else 
		if(document.getElementById('radio5').checked){
			var res2=document.getElementById('radio5').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2);
			
			}
			else 
			if(document.getElementById('radio6').checked){
				var res2=document.getElementById('radio6').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2);
				
				}
				
				if(document.getElementById('radio7').checked){
					var res3=document.getElementById('radio7').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3);
					
					}
					else
	if(document.getElementById('radio8').checked){
		var res3=document.getElementById('radio8').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3);
					}
					else
							if(document.getElementById('radio9').checked){
					var res3=document.getElementById('radio9').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3);
					}
					
						if(document.getElementById('radio10').checked){
					var res4=document.getElementById('radio10').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4);
					
					}
					else
	if(document.getElementById('radio11').checked){
		var res4=document.getElementById('radio11').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4);
					}
					else
						if(document.getElementById('radio12').checked){
					var res4=document.getElementById('radio12').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4);
					}
			else
					if(document.getElementById('radio13').checked){
					var res4=document.getElementById('radio13').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4);
					}
			
					  if(document.getElementById('radio14').checked){
		var res5=document.getElementById('radio14').value;
					cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5);
					
					}
					else
	if(document.getElementById('radio15').checked){
		var res5=document.getElementById('radio15').value;
		cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5);
					}
					else
if(document.getElementById('radio16').checked){
var res5=document.getElementById('radio16').value;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5);
					}
					
if(document.getElementById('radio17').checked){
var res6=document.getElementById('radio17').value;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5)+'&res6='+encodeURIComponent(res6)+'&obser6='+encodeURIComponent(obser6);				
						}
					else 
if(document.getElementById('radio18').checked){
var res6=document.getElementById('radio18').value;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5)+'&res6='+encodeURIComponent(res6)+'&obser6='+encodeURIComponent(obser6);
						}
					else 
if(document.getElementById('radio19').checked){
var res6=document.getElementById('radio19').value;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5)+'&res6='+encodeURIComponent(res6)+'&obser6='+encodeURIComponent(obser6);	
						}
						
if(document.getElementById('radio20').checked){
	var res7=document.getElementById('radio20').value;
	cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5)+'&res6='+encodeURIComponent(res6)+'&obser6='+encodeURIComponent(obser6)+'&res7='+encodeURIComponent(res7)+'&obser7='+encodeURIComponent(obser7);
	}
	else 
if(document.getElementById('radio21').checked){
var res7=document.getElementById('radio21').value;
cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5)+'&res6='+encodeURIComponent(res6)+'&obser6='+encodeURIComponent(obser6)+'&res7='+encodeURIComponent(res7)+'&obser7='+encodeURIComponent(obser7);
	}
else
if(document.getElementById('radio22').checked){
	var res7=document.getElementById('radio22').value;
	cad='res1='+encodeURIComponent(res1)+'&obser1='+encodeURIComponent(obser1)+'&res2='+encodeURIComponent(res2)+'&obser2='+encodeURIComponent(obser2)+'&res3='+encodeURIComponent(res3)+'&obser3='+encodeURIComponent(obser3)+'&res4='+encodeURIComponent(res4)+'&obser4='+encodeURIComponent(obser4)+'&res5='+encodeURIComponent(res5)+'&obser5='+encodeURIComponent(obser5)+'&res6='+encodeURIComponent(res6)+'&obser6='+encodeURIComponent(obser6)+'&res7='+encodeURIComponent(res7)+'&obser7'+encodeURIComponent(obser7);
	}	
	else{
		alert("no ingreso nada")
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
  conexion1.open('POST','insertar2.php', true);
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
      resultados1.innerHTML = parent.location.href="pagina4.php";
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