<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar valor a paypal</title>
</head>
<?php

$customValue = "valor_personalizado"; // es el valor que enviamos a la API de Paypal
$buttonURL = "https://www.paypal.com/donate/?hosted_button_id=F3EV88GA3GCJN&custom=" . urlencode($customValue) . "&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWxvYmplY3RzLmNvbS9kb25hdGUvc2RrL2RvbmF0ZS1zZGsuanMiLCJhdHRycyI6eyJkYXRhLXVpZCI6IjE2OWJiODg2MjZfbXR5Nm1kZTZuZHkifX0&targetMeta=eyJ6b2lkVmVyc2lvbiI6IjlfMF81OCIsInRhcmdldCI6IkRPTkFURSIsInNka1ZlcnNpb24iOiIwLjguMCJ9";
echo '<a href="' . $buttonURL . '"><img src="otros/donativo.png" width="34px" height="34px" style="float: left; margin-left: 15px;"></a>';

?>
<body>
</body>
</html>