<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>



<?php
// Verificamos si se ha enviado un archivo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivo"])) {
    $nombreArchivo = $_FILES["archivo"]["name"];
    $tipoArchivo = $_FILES["archivo"]["type"];
    $tamanoArchivo = $_FILES["archivo"]["size"];
    $nombreTemporal = $_FILES["archivo"]["tmp_name"];
    
    // Verificamos si el archivo es una imagen (puedes ajustar los tipos de archivo permitidos)
    $tiposPermitidos = array("image/jpeg", "image/png", "image/gif");
    if (in_array($tipoArchivo, $tiposPermitidos)) {
        // Verificamos el tamaño del archivo (2 MB)
        if ($tamanoArchivo <= 2 * 1024 * 1024) {
            // Ruta donde deseas guardar los archivos
            $carpetaDestino = "images/";

            // Movemos el archivo desde la ubicación temporal a la carpeta de destino
            if (move_uploaded_file($nombreTemporal, $carpetaDestino . $nombreArchivo)) {
                echo "El archivo se ha subido correctamente.";
            } else {
                echo "Ha ocurrido un error al subir el archivo.";
            }
        } else {
            echo "El archivo es demasiado grande. El límite es de 2 MB.";
        }
    } else {
        echo "Tipo de archivo no permitido. Sube una imagen en formato JPEG, PNG o GIF.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subir Archivo</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <label for="archivo">Selecciona una imagen:</label>
        <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png, .gif">
        <input type="submit" value="Subir">
    </form>
</body>
</html>





<body>
</body>
</html>