<?php

//Muestra el usuario del sistema operativo del servidor, no del visitante.
		get_current_user();
        $username = get_current_user();
        echo "USUARIO: ".$username;

?>

