<?php
declare(strict_types=1);

function detectarSistemaOperativo(): string {
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

    if (stripos($userAgent, 'Android') !== false) {
        return 'Android';
    }
    if (stripos($userAgent, 'iPhone') !== false || stripos($userAgent, 'iPad') !== false) {
        return 'iOS';
    }
    if (stripos($userAgent, 'Windows') !== false) {
        return 'Windows';
    }
    if (stripos($userAgent, 'Macintosh') !== false || stripos($userAgent, 'Mac OS X') !== false) {
        return 'macOS';
    }
    if (stripos($userAgent, 'Linux') !== false) {
        return 'Linux';
    }
    return 'Sistema operativo desconocido';
}


$sistemaDetectado = detectarSistemaOperativo();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detección de sistema operativo</title>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      padding: 2rem;
    }
  </style>
</head>
<body>
  <p>El sistema operativo detectado es: <strong><?= htmlspecialchars($sistemaDetectado, ENT_QUOTES, 'UTF-8') ?></strong></p>
</body>
</html>
