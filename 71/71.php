<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Autentificación PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 40px;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 300px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h1>Autentificación PHP</h1>
  <form action="control.php" method="POST">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" maxlength="50" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" maxlength="50" required>

    <input type="submit" value="Entrar">
  </form>
</body>
</html>
<?php
    if(isset($_GET['errorusuario']) && $_GET['errorusuario'] == 'si') {
        echo '<p style="color: red; text-align: center;">Usuario o contraseña incorrectos.</p>';
    }
    if(isset($_GET['cerrarsesion']) && $_GET['cerrarsesion'] == 'si') {
        session_start();
        session_destroy();
        echo '<p style="color: green; text-align: center;">Sesión cerrada correctamente.</p>';
    }
?>
