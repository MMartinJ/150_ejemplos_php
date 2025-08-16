<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Formulario de Verificación</title>
  <?php
  echo "<script>function verifica(){if (document.formulario.nombre.value==\"\")alert (\"Debe rellenar el campo nombre\");else	document.formulario.submit();}</script>";
  ?>
</head>

<body>
  <form name="formulario" method="post" action="destino.php">
    Nombre: &nbsp;<input type="text" name="nombre"><br>
    <input type="button" value="Enviar" onClick="verifica()">
  </form>
</body>

</html>