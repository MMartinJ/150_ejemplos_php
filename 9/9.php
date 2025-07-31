<?php
/*Claro. Este código PHP intenta detectar la resolución de pantalla del usuario usando JavaScript y luego mostrarla en la página.
*El flujo es así:

*Primera visita:
*Si no existe el parámetro r en la URL, el código genera un script JavaScript que redirige la página agregando los parámetros r=1, Ancho (ancho de pantalla) y Alto (alto de pantalla) a la URL.

*Segunda visita (tras redirección):
*Si ya existen los parámetros, el código puede mostrar contenido diferente según si se detectó o no la resolución.

*Siempre:
*Muestra la resolución detectada usando los valores de $_GET['Ancho'] y $_GET['Alto'].

*En resumen: el código recarga la página con la resolución de pantalla del usuario en la URL y luego la muestra.
*/
if (!isset($_GET['r'])) {
    $self = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8');
echo "<script>
window.location = '{$self}?r=1&Ancho=' + screen.width + '&Alto=' + screen.height;
</script>";
    exit;
} else {
    if (isset($_GET['Ancho']) && isset($_GET['Alto'])) {
        // Aquí puedes mostrar contenido personalizado según la resolución
        echo "La resolución es: " . intval($_GET['Ancho']) . " x " . intval($_GET['Alto']);
    } else {
        echo "No se pudo detectar la resolución de pantalla.";
    }
}
?>