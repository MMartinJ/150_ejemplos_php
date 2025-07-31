<?php
// Validar e.mail
$email = $_POST['email'];
if(!preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$email)) {
	echo 'Email valido.';
}
?>