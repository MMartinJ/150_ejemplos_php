<?
// Conectando, seleccionando la base de datos
// nhjukvlb_ejemplo será el usuario que se cambiará por el nuevo
// phpya101 es la contraseña que se cambiará por el nuevo
$link = mysql_connect('localhost', 'nhjukvlb_ejemplo', 'phpya101')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Conexion correcta al servidor MySql';
//nhjukvlb_libro101 será la Base de Datos
mysql_select_db('nhjukvlb_libro101') or die('No se pudo seleccionar la base de datos');
?>