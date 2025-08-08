<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('form');
      const responseDiv = document.getElementById('response');

      form.addEventListener('submit', async event => {
        event.preventDefault(); // evitamos recarga de la página

        // Mostramos indicador de que estamos procesando la petición
        responseDiv.textContent = 'Enviando datos…';

        // Recogemos los datos del formulario
        const data = new FormData(form);

        try {
          // Enviamos los datos a nuestro endpoint PHP
          const res = await fetch('endpoint.php', {
            method: 'POST',
            body: data
          });

          // Convertimos respuesta en objeto JavaScript
          const resData = await res.json();

          // Mostramos el JSON formateado en el div
          responseDiv.textContent = JSON.stringify(resData, null, 2);

        } catch (err) {
          // Si algo falla (red, parseo, etc.), lo indicamos al usuario
          responseDiv.textContent = 'Error: ' + err.message;
        }
      });
    });
  </script>
</head>

<body>
    <h2>uso de fetch</h2>

    <form id="form">
        <input type="text" id="username" name="username" />

        <br />
        <br />

        <input
            type="password"
            id="password"
            name="password"
            autocomplete="on" />

        <br />
        <br />

        <button type="submit" id="submit-btn">Log in</button>
    </form>
<!-- Contenedor donde mostraremos la respuesta JSON -->
  <div id="response"></div>

</body>

</html>