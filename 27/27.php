
<?php
header("HTTP/1.1 301 Moved Permanently");
header("Status: 301 Moved Permanently");
header("Location: http://www.google.com/");
exit(0); // Esto es opcional pero se sugiere para evitar cualquier salida accidental
?>
