<!DOCTYPE>
<html lang="es">
<head>
	<title>ajax</title>
	<script>
		document.addEventListener('DOMContentLoaded', function(){
			
			document.getElementById('miform').addEventListener('submit', function(event){
				const name = document.getElementById('nombre').value;
					event.preventDefault();
					const ajax=new XMLHttpRequest();
					ajax.open('POST','resultadoajax.php',true);
					ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					ajax.onreadystatechange = function(){
						if(this.readyState == 4 && this.status == 200){
							document.getElementById('respuesta').innerHTML=ajax.responseText;
						}
					};
					
					ajax.send('nombre='+ encodeURIComponent(name));

			});
		});
	</script>
</head>
<body>
	<form action="" method="" id="miform">
		<input type="text" id="nombre">
		<input type="submit" value="enviar">

		<div id="respuesta"></div>


	</form>
</body>
</html>