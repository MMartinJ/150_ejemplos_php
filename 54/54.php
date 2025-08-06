<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario con autolectura</title>
  <style>
    .rojo {
      color: #F00;
    }
    .campo {
      margin-bottom: 10px;
    }
    .boton {
      padding: 5px 10px;
    }
  </style>
</head>
<body>

  <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <p>Este texto debe verse en todo momento para poder verificar la autolectura dentro de un mismo <span class="rojo">archivo PHP</span></p>
    
    <p>
      Empresa: <input class="campo" name="empresa" size="40" required><br>
      Nombre y Apellidos: <input class="campo" name="nombre" size="40" required><br>
      <input class="boton" type="submit" value="Enviar">
    </p>
  </form>

  <?php
  date_default_timezone_set('Europe/Madrid'); // Ajusta la zona horaria si es necesario
  $hora = date("H:i:s");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $empresa = htmlspecialchars($_POST['empresa'] ?? '');
      $nombre = htmlspecialchars($_POST['nombre'] ?? '');

      echo "<p style='color:#FF8C00; font-family:Verdana; font-size:14px;'>✅ Gracias <strong>$nombre</strong>, se han guardado correctamente los datos.</p>";
      echo "<p>Empresa: $empresa<br>Nombre y Apellidos: $nombre</p>";
  }

  echo "<p>Hora actual: $hora</p>";

  // Redirección automática después de 20 segundos
  header("Refresh:20; url=54.php");
  ?>
  
</body>
</html>
