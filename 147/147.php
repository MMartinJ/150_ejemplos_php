<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
function detectarSistemaOperativo() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    if (strpos($userAgent, 'Android') !== false) {
        return "Android";
    } elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
        return "iOS";
    } else {
        return "Sistema operativo desconocido";
    }
}

$sistemaDetectado = detectarSistemaOperativo();
echo "El sistema operativo detectado es: " . $sistemaDetectado;
?>
<body>
</body>
</html>