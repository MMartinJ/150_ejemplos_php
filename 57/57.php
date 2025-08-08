<DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title> Subir Archivo</title>
       
    </head>

    <body>
        <h1>Subir Archivo</h1>
        
        <form method="POST" enctype="multipart/form-data">
            <label for="archivo">Selecciona una imagen:</label>
            <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png, .gif">
            <input type="submit" value="Subir">
        </form>

        <?php
        // Verificamos si se ha enviado un archivo
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivo"])) {
            //usamos basename para evitar problemas de seguridad con rutas (path traversal)
            // y agregamos un timestamp para evitar conflictos de nombres
            $nombreArchivo = basename($_FILES["archivo"]["name"]) . "_" . time();

            $tipoArchivo = $_FILES["archivo"]["type"];
            $tamanoArchivo = $_FILES["archivo"]["size"];
            // Obtenemos el nombre temporal del archivo
            $nombreTemporal = $_FILES["archivo"]["tmp_name"];

            // Verificamos si el archivo es una imagen (puedes ajustar los tipos de archivo permitidos)
            $tiposPermitidos = array("image/jpeg", "image/png", "image/gif");
            if (in_array($tipoArchivo, $tiposPermitidos)) {
                // Verificamos el tamaño del archivo (2 MB)
                if ($tamanoArchivo <= 2 * 1024 * 1024) {
                    // Ruta donde deseas guardar los archivos
                    $carpetaDestino = "images/";

                    // Verificamos si la carpeta de destino existe, si no, la creamos
                    if (!is_dir($carpetaDestino)) {
                        mkdir($carpetaDestino, 0755, true);
                    }
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

    </body>

    </html>