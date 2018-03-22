<?php

$today = date("YmdHis");

$url = $_REQUEST['url'];
$user = $_REQUEST['USER'];
$pwd = $_REQUEST['PWD'];
$cert = $_REQUEST['CERTIFICATE'];
$certpwd = $_REQUEST['CERTPWD'];
$version = $_REQUEST['VERSION'];
$payment_action = $_REQUEST['PAYMENTACTION'];
$card_type = $_REQUEST['cardType'];
$acct = $_REQUEST['cardnum'];
$exp_date = $_REQUEST['month'] . $_REQUEST['year'];
$cvv2 = $_REQUEST['cvv2'];
$amt = $_REQUEST['AMT'];
$currency_code = $_REQUEST['CURRENCYCODE'];
$fname = $_REQUEST['first'];
$lname = $_REQUEST['last'];
$street = $_REQUEST['STREET'];
$city = $_REQUEST['CITY'];
$state = $_REQUEST['STATE'];
$zip = $_REQUEST['Zip'];
$country_code = $_REQUEST['COUNTRYCODE'];
$method = $_REQUEST['METHOD'];
$ip = $_SERVER['REMOTE_ADDR'];

$headers[] = "Content-Type: text/namevalue";

$headers[]= "X-VPS-CLIENT-TIMEOUT: 45";
$headers[]= "X-VPS-REQUEST-ID: " . $today;
$headers[]= "PAYPAL-NVP:";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

//turn off server and peer verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSLCERT, $cert);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "USER=$user&PWD=$pwd&CERTIFICATE=$cert&CERTIFICATEPWD=$certpwd&VERSION=$version&PAYMENTACTION=$payment_action&
CREDITCARDTYPE=$card_type&IPADDRESS=$ip&ACCT=$acct&EXPDATE=$exp_date&CVV2=$cvv2&AMT=$amt&
CURRENCYCODE=$currency_code&FIRSTNAME=$fname&LASTNAME=$lname&STREET=$street&CITY=$city&STATE=$state&
Zip=$zip&COUNTRYCODE=$country_code&METHOD=$method";

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
    $request = explode("&", $request);
    echo "REQUEST: <br />";
    foreach($request as $input) {
      echo $input . "<br />";
    }
    echo "<br />RESPONSE:<br />";
    $response = explode("&", $response);
    foreach($response as $data) {
      echo $data . "<br />";
    }
    ?>

  </div>


  <script src = "../script.js"></script>
  </body>
  </html>
