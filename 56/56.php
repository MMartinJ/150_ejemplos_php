<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Prueba Ajax moderna</title>
  <script>
    function test() {
      const divResultado = document.getElementById('resultado');
	  // Obtenemos el valor del campo de texto y lo codificamos para la URL
	  // Usamos encodeURIComponent para asegurar que los caracteres especiales se manejen correctamente
      const nombre = encodeURIComponent(document.getElementById('nombre').value);

	  // Creamos una solicitud AJAX
	  // Usamos XMLHttpRequest para enviar los datos al servidor
      const ajax = new XMLHttpRequest();
      ajax.open("POST", "resultadoajax.php", true);
	  // Establecemos el encabezado para indicar que estamos enviando datos de formulario
	  // Esto es necesario para que el servidor pueda interpretar los datos correctamente
      ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	  // Definimos lo que sucede cuando la solicitud cambia de estado
      ajax.onreadystatechange = function () {
		// Verificamos si la solicitud ha finalizado y si fue exitosa
        if (ajax.readyState === 4) {
		//si el estado es 200, significa que la solicitud fue exitosa
          if (ajax.status === 200) {
            divResultado.innerHTML = ajax.responseText;
          } else {
            divResultado.innerHTML = "❌ Error al procesar la solicitud.";
          }
        } else {
          divResultado.innerHTML = "⏳ Espere por favor...";
        }
      };

      ajax.send("nombre=" + nombre);
    }
  </script>
</head>

<body>
  <main>
    <h1>Prueba de Ajax</h1>
    <form id="form1" method="post" onsubmit="event.preventDefault(); test();">
      <label for="nombre">Valor a enviar:</label>
      <input type="text" name="nombre" id="nombre" required />
      <button type="submit">Enviar</button>
    </form>

    <section id="resultado">Aquí mostramos el resultado</section>
  </main>
</body>
</html>
