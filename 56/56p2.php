<!DOCTYPE html>
<html lang="es">
<head>
	<title>mi ejercicio ajax</title>
	<meta charser="utf-8">
	<script>
		

		document.addEventListener('DOMContentLoaded', function(){

			document.getElementById('miform').addEventListener('submit', function(event){
				event.preventDefault();
				const nombre = document.getElementById('nombre').value;
				
				const ajax = new XMLHttpRequest();

				ajax.open('POST', 'resultadoajax.php', true);
				ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				ajax.onreadystatechange = function(){
					if(this.readyState == 4  && this.status == 200){
						document.getElementById('respuesta').innerHTML = ajax.responseText;
					}
				};
				ajax.send('nombre=' + encodeURIComponent(nombre));
			});
		});
		
	</script>
</head>
<body>

<form action="" method="POST" id="miform">
	<input type="text" id="nombre">
	<input type="submit" value="enviar">

	<div id="respuesta">

	</div>


</body>
</html>