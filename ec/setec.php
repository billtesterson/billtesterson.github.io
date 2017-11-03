<?php
$method = $_REQUEST['METHOD'];
$amt = $_REQUEST['PAYMENTREQUEST_0_AMT'];
$return = $_REQUEST['RETURNURL'];
$cancel = $_REQUEST['CANCELURL'];
$shipping = $_REQUEST['NOSHIPPING'];
$solution = $_REQUEST['SOLUTIONTYPE'];
$url = $_REQUEST['URL'];
$today = date("YmdHis");

$headers[] = "Content-Type: text/namevalue";
// Set the server timeout value to 45, but notice below in the cURL section, the timeout
// for cURL is set to 90 seconds.  Make sure the server timeout is less than the connection.
$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
$headers[] = "X-VPS-REQUEST-ID:" . $today;
$headers[] = "PAYPAL-NVP:";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "METHOD=$method&PAYMENTREQUEST_0_AMT=$amt&RETURNURL=$return
&CANCELURL=$cancel&NOSHIPPING=$shipping&SOLUTIONTYPE=$solution";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php echo $request;?>
  <?php echo $response;?>
</body>
</html>
