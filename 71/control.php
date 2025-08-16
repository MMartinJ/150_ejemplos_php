<?php 
//vemos si el usuario y contraseñaa es váildo 
if ($_POST["usuario"] == "entrar" && $_POST["contrasena"] == "qwerty"){ 
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
    session_start(); 
    $_SESSION["autentificado"] = "SI";
    header ("Location: aplicacion.php"); 
}else { 
    //si no existe le mando otra vez a la portada 
    header("Location: 71.php?errorusuario=si"); 
} 
?> 
