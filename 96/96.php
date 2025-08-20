<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Documento sin título</title>
</head>
<body>
<?php
header('HTTP/1.1 200 OK');
header("Content-Security-Policy: default-src 'self'");

// STEP 1 - Log the IPN data to a file for debugging purposes
// This is useful to see what PayPal is sending us, and to check that the data
file_put_contents(__DIR__.'/ipn_debug.log', date('c')." ".print_r($_POST, true)."\n", FILE_APPEND);

// STEP 2 - create the response we need to send back to PayPal for them to confirm that it's legit

$resp = 'cmd=_notify-validate';
foreach ($_POST as $parm => $var) {
    $var = urlencode(stripslashes($var));
    $resp .= "&$parm=$var";
}

// STEP 3 - Extract the data PayPal IPN has sent us, into local variables

$item_name        = $_POST['item_name'];
$item_number      = $_POST['item_number'];
$payment_status   = $_POST['payment_status'];
$payment_amount   = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id           = $_POST['txn_id'];
$receiver_email   = $_POST['receiver_email'];
$payer_email      = $_POST['payer_email'];
$record_id        = $_POST['custom'];


// Define the data to be saved in CSV format
$linea = $item_name . "," . $item_number . "," . $payment_status . "," . $payment_amount . "," . $payment_currency . "," . $txn_id . "," . $receiver_email . "," . $payer_email . "," . $record_id;

// Open the file in append mode
$archivo = fopen("notificacion.csv", "a");

// Save the data in CSV format
fputcsv($archivo, explode(",", $linea), ";");

// Close the file
fclose($archivo);



// STEP 4 - Get the HTTP header into a variable and send back the data we received so that PayPal can confirm it's genuine

$httphead = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$httphead .= "Content-Type: application/x-www-form-urlencoded\r\n";
$httphead .= "Content-Length: " . strlen($resp) . "\r\n\r\n";

$errno = '';
$errstr = '';

$fh = fsockopen('ssl://www.paypal.com', 443, $errno, $errstr, 30);

if (!$fh) {
    // Uh oh. This means that we have not been able to get through to the PayPal server. It's an HTTP failure.
    // You need to handle this here according to your preferred business logic. An email, a log message, a trip to the pub...
} else {
    fputs($fh, $httphead . $resp);
    while (!feof($fh)) {
        $readresp = fgets($fh, 1024);
        if (strcmp($readresp, "VERIFIED") == 0) {
            // The IPN notification is verified
        } else if (strcmp($readresp, "INVALID") == 0) {
            // Man alive! A hacking attempt?
        }
    }
    fclose($fh);
}






?>

</body>

</html>