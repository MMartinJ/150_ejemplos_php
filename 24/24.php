<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php

/* Escribimos el título de la ventana deseado y con un script de JavaScript 
y mezclando PHP lo mandamos cambiar */
$nombre_titulo="los mejores ejemplos en PHP"; // título de la ventana de windows

?>

<script language="JavaScript">
window.document.title = "<? echo $nombre_titulo; ?>"
</script> 

<body>
</body>
</html>

