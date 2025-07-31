<?php
function esDispositivoMovil() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $dispositivosMoviles = array(
        'Android',
        'webOS',
        'iPhone',
        'iPad',
        'iPod',
        'BlackBerry',
        'Windows Phone'
    );

    foreach ($dispositivosMoviles as $dispositivo) {
        if (stripos($userAgent, $dispositivo) !== false) {
            return true;
        }
    }

    return false;
}

if (esDispositivoMovil()) {
    $mensaje = 'Estás accediendo desde un dispositivo móvil.';
} else {
    $mensaje = 'Estás accediendo desde un dispositivo no móvil.';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de PHP 8</title>
</head>
<body>
    <h1>Detección de dispositivo móvil</h1>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
