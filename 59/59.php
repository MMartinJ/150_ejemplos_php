<?php
// Valores iniciales del calendario
$month = date("n");
$year = date("Y");
$diaActual = date("j");

// Día de la semana del primer día del mes (0 = domingo)
$diaSemana = (int) date("w", mktime(hour: 0, minute: 0, second: 0, month: $month, day: 1, year: $year));
$diaSemana = $diaSemana === 0 ? 7 : $diaSemana; // Ajustamos para que lunes sea el inicio

// Último día del mes
$ultimoDiaMes = (int) date("j", mktime(hour: 0, minute: 0, second: 0, month: $month + 1, day: 0, year: $year));

// Nombres de los meses
$meses = [
    1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Calendario en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #calendar {
            border-collapse: collapse;
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
        }
        #calendar caption {
            text-align: center;
            padding: 10px;
            background-color: #003366;
            color: #fff;
            font-weight: bold;
        }
        #calendar th, #calendar td {
            border: 1px solid #ccc;
            width: 14.28%;
            height: 40px;
            text-align: center;
            vertical-align: middle;
        }
        #calendar th {
            background-color: #006699;
            color: #fff;
        }
        #calendar td {
            background-color: #f0f0f0;
        }
        #calendar .hoy {
            background-color: #ff6666;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Calendario en PHP</h1>
    <table id="calendar">
        <caption><?= $meses[$month] . " " . $year ?></caption>
        <thead>
            <tr>
                <th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th>
                <th>Vie</th><th>Sáb</th><th>Dom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            $last_cell = $diaSemana + $ultimoDiaMes - 1;
            for ($i = 1; $i <= 42; $i++) {
                if ($i < $diaSemana || $i > $last_cell) {
                    echo "<td></td>";
                } else {
                    $day = $i - $diaSemana + 1;
                    $class = ($day == $diaActual) ? "hoy" : "";
                    echo "<td class='$class'>$day</td>";
                }
                if ($i % 7 == 0) {
                    echo "</tr><tr>";
                }
            }
            ?>
            </tr>
        </tbody>
    </table>
</body>
</html>
