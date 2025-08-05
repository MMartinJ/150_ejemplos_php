<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<div>nombre puede contener o no la palabra coco</div>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre">
		<input type="submit" value="Enviar">
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nombre = $_POST['nombre'];
			if (preg_match("/coco/i", $nombre)) {
				echo "<p>La palabra 'coco' existe en el nombre.</p>";
			} else {
				echo "<p>La palabra 'coco' no existe en el nombre.</p>";
			}
		}
		?>
	</form>

</body>
</html>
