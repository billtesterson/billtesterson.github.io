<?php

$today = date("YmdHis");

$url = "https://api-3t.sandbox.paypal.com/nvp";
$user = $_REQUEST['USER'];
$pwd = $_REQUEST['PWD'];
$sig = $_REQUEST['SIGNATURE'];
$version = $_REQUEST['VERSION'];
$method = $_REQUEST['METHOD'];
$receiver = $_REQUEST['RECEIVERTYPE'];
$phone = $_REQUEST['L_RECEIVERPHONE0'];
$amt = $_REQUEST['L_AMT0'];
//$phone2 = $_REQUEST['L_RECEIVERPHONE1'];
//$amt2 = $_REQUEST['L_AMT1'];
$currency = $_REQUEST['CURRENCYCODE'];

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

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);
//L_RECEIVERPHONE1=$phone2&L_AMT1=$amt2&
$request = "USER=$user&PWD=$pwd&SIGNATURE=$sig&VERSION=$version&METHOD=$method&RECEIVERTYPE=$receiver&L_RECEIVERPHONE0=$phone&L_AMT0=$amt&CURRENCYCODE=$currency";
$req = explode("&", $request);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);

$response = explode("&", $response);



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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <script>
  $(function(){
    $('#header').load('../nav.html');
  });
  </script>
  <div id = "header"></div>
<div class = "container">

  <?php
    echo "REQUEST: <br />";
    foreach($req as $input) {
      echo $input . "<br />";
    }
    echo "<br />RESPONSE:<br />";
    foreach($response as $data) {
      echo $data . "<br />";
    }



  ?>
</div>


  <script src = "../script.js"></script>
  </body>
  </html>
