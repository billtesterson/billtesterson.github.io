<?php
$USER = "wpittman_api1.paypal.com";
$PWD = "C7CM265TPAMF2LM7";
$SIGNATURE = "AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3";
$VERSION = "204.0";
$METHOD = "DoExpressCheckoutPayment";
$TOKEN = $_REQUEST['paymentToken'];
$PAYERID = $_REQUEST['payerID'];
$PAYMENTREQUEST_0_PAYMENTACTION = 'Sale';
$RETURNURL = "https://rest-wpittman.c9users.io/js/index.php";
$CANCELURL = "https://rest-wpittman.c9users.io/cancel.php";
$PAYMENTREQUEST_0_AMT = "1.00";


$today = date("YmdHis");

$url = "https://api-3t.sandbox.paypal.com/nvp";

$headers[] = "Content-Type: text/namevalue";
$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
$headers[] = "X-VPS-REQUEST-ID: . $today";
$headers[] = "PAYPAL-NVP:";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

//$request = condense($data);
$request = "USER=$USER&PWD=$PWD&SIGNATURE=$SIGNATURE&VERSION=$VERSION&METHOD=$METHOD&RETURNURL=$RETURNURL&CANCELURL=$CANCELURL&PAYMENTREQUEST_0_AMT=$PAYMENTREQUEST_0_AMT&PAYMENTREQUEST_0_PAYMENTACTION=$PAYMENTREQUEST_0_PAYMENTACTION&TOKEN=$TOKEN&PAYERID=$PAYERID";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);


$response = curl_exec($ch);
/*$response = urldecode($response);
$data = json_encode($response);
var_dump($data);*/
parse_str($response);
urldecode($response);

echo $response;
?>
