<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\27\27.php

// Redirección permanente (HTTP 301) a otra URL

// Envía el encabezado de redirección 301 (movido permanentemente)
header("Location: https://www.google.com/", true, 301);

// Finaliza el script para evitar cualquier salida adicional
exit;
// Fin del script
?>
<!-- Cuando usas header("Location: ...", true, 301);, estás diciendo al navegador (y a los motores de búsqueda 
como Google):

“Esta página ya no está aquí.”

“La nueva dirección es esta otra.”

“No volverá a cambiar.”

Esto tiene implicaciones importantes para el SEO: los buscadores actualizan sus índices para reflejar la 
nueva URL

Preservar posicionamiento SEO: El 301 transfiere la autoridad de la página antigua a la nueva. -->