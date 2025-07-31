<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Carrusel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .carousel {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            white-space: nowrap;
            overflow: hidden;
        }

        .carousel-item {
            display: inline-block;
            padding: 10px 20px;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <div class="carousel">
        <?php
            $lines = file('noticias.txt'); // Reemplaza con la ruta de tu archivo de texto
            foreach ($lines as $line) {
                echo '<div class="carousel-item">' . htmlspecialchars($line) . '</div>';
            }
        ?>
    </div>
</body>
</html>
