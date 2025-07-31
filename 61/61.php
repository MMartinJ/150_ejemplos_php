<html>  
<head>  
<title>Lista de clientes.</title>  
</head>  

<body>  
<!-- A través de la variable id enviamos el valor 324 --> 

Buscar la ficha  -- <a href="61.php?id=2017">Ver ficha del cliente</a> 

</body> 
</html> 
=============================== 
<html>  
<head>  
<title>Recibo cliente.</title>  
</head>  

<body>  
<!-- Recibimos la variable id y la guardamos en la  
variable identificador y la imprimimos en pantalla --> 

<?
$identificador = $_GET['id']; 

echo "El identificador de este cliente es: $identificador"; 
?> 

</body> 
</html>