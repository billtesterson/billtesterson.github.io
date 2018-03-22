<?php
$user = $_REQUEST['USER'];
$vendor = $_REQUEST['VENDOR'];
$partner = $_REQUEST['PARTNER'];
$pwd = $_REQUEST['PWD'];
$trxtype = $_REQUEST['TRXTYPE'];
$origid = $_REQUEST['ORIGID'];
$tender = $_REQUEST['TENDER'];
$verbosity = $_REQUEST['VERBOSITY'];

$today = date("YmdHis");

$headers[] = "Content-Type: text/namevalue";
// Set the server timeout value to 45, but notice below in the cURL section, the timeout
// for cURL is set to 90 seconds.  Make sure the server timeout is less than the connection.
$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
$headers[] = "X-VPS-REQUEST-ID:" . $today;
$headers[] = "PAYPAL-NVP:";

$url = "https://pilot-payflowpro.paypal.com";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "USER=$user&VENDOR=$vendor&PARTNER=$partner&PWD=$pwd&TRXTYPE=$trxtype&TENDER=$tender&ORIGID=$origid&VERBOSITY=$verbosity";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);


?>
<html>
<head>

</head>
<body>
  <?php echo $request;?>
  <br /><br /><br />
  <?php echo $response; ?>
</body>
</html>
