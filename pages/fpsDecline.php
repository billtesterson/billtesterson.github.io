<?php
$today = date("YmdHis");

$url = "https://pilot-payflowpro.paypal.com";

$vendor = $_REQUEST['VENDOR'];
$user = $_REQUEST['USER'];
$partner = $_REQUEST['PARTNER'];
$pwd = $_REQUEST['PWD'];
$amt = $_REQUEST['AMT'];
$trxtype = $_REQUEST['TRXTYPE'];
$tender = $_REQUEST['TENDER'];
$acct = $_REQUEST['ACCT'];
$cust_ip = $_REQUEST['CUSTIP'];
$exp_date = $_REQUEST['EXPDATE'];
$update_action = $_REQUEST['UPDATEACTION'];




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

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "VENDOR=$vendor&USER=$user&PWD=$pwd&PARTNER=$partner&AMT=$amt&TRXTYPE=$trxtype&TENDER=$tender&ACCT=$acct&CUSTIP=$cust_ip&EXPDATE=$exp_date&UPDATEACTION=$update_action";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);

?>
<html>
<head>

</head>
<body>
  <?php echo "request:" + $request; ?>
  <br /><br />
  <?php echo "response:" + $response; ?>
</body>
</html>
