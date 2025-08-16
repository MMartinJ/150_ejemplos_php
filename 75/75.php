<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    img {
      border: none;
    }
  </style>
</head>
<body>
  <?php
 $google = "https://www.google.com";
?>

<img src="lupa.JPG" width="128" height="128" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="16,18,110,117" href="<?= $google; ?>" />
</map>
  
</body>
</html>
