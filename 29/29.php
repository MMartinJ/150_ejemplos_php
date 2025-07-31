<?php
/* Cuando quieres que una pagina solo se abra si es referida por otra en particular por ej: 
contacto.php y enviar-contacto.php, esta ultima encargada de enviar por mail los datos y solo 
se debe ejecutar si es llamada por contacto.php que contiene el formulario, debes poner en el 
inicio de la page el siguiente script: */
if(!($_SERVER["HTTP_REFERER"]=="http://www.google.com" )){ 
echo "no puedes acceder a esta pagina desde aqui"; 
exit(); // salir del sprit
};
?>