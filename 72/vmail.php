<?php

// Reglas de validación
$email = trim($_GET['email']);

//Que haya una @ en el correo
//Que tenga un dominio válido (.com, .net, etc.)
//Que no tenga caracteres prohibidos como espacios o símbolos incorrectos
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email no válido
    echo "Formato de correo inválido";
    exit;
}
if (preg_match("/[\r\n]/", $email)) { 
	// Email contiene saltos de línea
	echo "El correo no puede contener saltos de línea";
	exit;
}
// Verificar si el dominio es válido
$domain = substr(strrchr($email, "@"), 1);
if (!checkdnsrr($domain, "MX")) {
	// Dominio no válido
	echo "Dominio de correo inválido";
	exit;
}
echo "Correo electrónico válido: $email";

?>