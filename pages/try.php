<?php

$today = date("YmdHis");


$url = $_REQUEST['url'];
$vendor = $_REQUEST['VENDOR'];
$user = $_REQUEST['USER'];
$pwd = $_REQUEST['PWD'];
$partner = $_REQUEST['PARTNER'];
$trxtype = $_REQUEST['TRXTYPE'];
$tender = $_REQUEST['TENDER'];
$origid = $_REQUEST['ORIGID'];

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

// turn off server and peer verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "VENDOR=$vendor&USER=$user&PWD=$pwd&PARTNER=$partner&TRXTYPE=$trxtype&TENDER=$tender&ORIGID=$origid";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);

echo "Request: " . $request;
echo "<br /><br />";
echo "Response: " . $response;
echo "<br /><br />"
?>
<a href = "payflow.php">back to payflow</a>
