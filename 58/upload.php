<?php
$path = "videos/";
$path = $path . basename($_FILES["videofile"]["name"]);
if (move_uploaded_file($_FILES["videofile"]["tmp_name"], $path)) {
    echo "Successful Archivo subido: " . basename($_FILES["videofile"]["name"]);
} else {
    echo "Error subiendo archivo.";
}
