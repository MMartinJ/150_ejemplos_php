<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prueba ajax</title>
<script>
//métodos para crear el objeto ajax
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	  }
  return xmlhttp;
}
  
  //funcion de prueba
function test(){
	//capa donde se mostrará el resultado
  divResultado = document.getElementById('resultado');
  //valores de los inputs
  nombre=document.getElementById('nombre').value;
   //instanciamos el objetoAjax
  ajax=objetoAjax();

  //uso del medotod POST para llamar a la página que hara los cálculos.
	ajax.open("POST", "resultadoajax.php",true);
	//mostrar resultados en esta capa
	ajax.onreadystatechange=function() {
			
		divResultado.innerHTML="Espere por favor";
		
		// readyState==4 esta listo 
		// status==200 lo trasmitido es correcto
		if (ajax.readyState==4 && ajax.status == 200) {
			divResultado.innerHTML = ajax.responseText
			}
		}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("nombre="+nombre)

}



</script>
</head>

<body>
<p>Prueba de Ajax</p>
<form id="form1" name="form1" method="post" action="">
  <label>Valor a envíar 
  <input type="text" name="nombre" id="nombre" />
  </label>
  <label>
    <input type="button" name="button" id="button" value="Botón" onclick="test()" />
  </label>
</form>
<p>&nbsp;</p>
<div id="resultado">Aquí mostramos el resultado<div>
</body>
</html>