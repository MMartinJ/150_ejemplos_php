<?php

if(isset($_POST['accion']) && $_POST['accion'] === 'activar') {
    
    echo "Perfil activado correctamente.";
} else {
    echo "No se ha enviado el formulario.";
}




?>