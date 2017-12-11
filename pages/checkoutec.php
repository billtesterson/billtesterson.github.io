<?php

$today = date("YmdHis");

$url = $_REQUEST['URL'];
$vendor = $_REQUEST['VENDOR'];
$user = $_REQUEST['USER'];
$partner = $_REQUEST['PARTNER'];
$pwd = $_REQUEST['PWD'];
$amt = $_REQUEST['AMT'];
$trxtype = $_REQUEST['TRXTYPE'];
$action = $_REQUEST['ACTION'];
$tender = $_REQUEST['TENDER'];
$currency = $_REQUEST['CURRENCY'];
$return = $_REQUEST['RETURNURL'];
$cancel = $_REQUEST['CANCELURL'];

$headers[] = "content-Type: text/namvevalue";

$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
$headers[] = "X-VPS-REQUEST-ID:" . $today;
$headers[] = "PAYPAL-NVP";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $URL)
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "VENDOR=$vendor&USER=$user&PWD=$pwd&PARTNER=$partner&AMT=$amt&TRXTYPE=$trxtype
&ACTION=$action&TENDER=$tender&CURRENCY=$currency&RETURNURL=$return&CANCELURL=$cancel";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 " lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <link rel = "stylesheet" href = "../css/bootstrap.min.css" />
  <link rel = "stylesheet" href = "../style.css" />
</head>
<body>
  <script>
  $(function(){
    $('#header').load('../nav.html');
  });
  </script>
  <div id = "header"></div>



  <script src="//www.paypalobjects.com/api/checkout.js" async></script>
  </body>
  </html>
