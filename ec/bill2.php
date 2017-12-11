<?php


$user = $_REQUEST['USER'];
$pwd = $_REQUEST['PWD'];
$sig = $_REQUEST['SIGNATURE'];
$method = $_REQUEST['METHOD'];
$amt = $_REQUEST['AMT'];
$return = $_REQUEST['RETURNURL'];
$cancel = $_REQUEST['CANCELURL'];
$action = $_REQUEST['PAYMENTACTION'];
$version = $_REQUEST['VERSION'];

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

$token_request = "USER=$user&PWD=$pwd&SIGNATURE=$sig&METHOD=$method&AMT=$amt&RETURNURL=$return
&CANCELURL=$cancel&PAYMENTACTION=$action&VERSION=$version";

curl_setopt($ch, CURLOPT_POSTFIELDS, $token_request);

$token_response = curl_exec($ch);

?>
<!DOCTYPE html>
<html>
<body>
  <?php
  echo $token_response;
  ?>
</body>
</html>
