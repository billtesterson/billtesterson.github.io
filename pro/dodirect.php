<?php

$today = date("YmdHis");

$url = $_REQUEST['url'];
$user = $_REQUEST['USER'];
$pwd = $_REQUEST['PWD'];
$signature = $_REQUEST['SIGNATURE'];
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

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$str = file_get_contents('text.txt');
$str = preg_replace('/\s+/', '', $str);
$str = substr($str, 0, -1);



$request = "USER=$user&PWD=$pwd&SIGNATURE=$signature&VERSION=$version&PAYMENTACTION=$payment_action&
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
<p>
  <?php
  echo $request + "<br /><br /><br />";

  var_dump($request);
  var_dump($response);
  $response = explode("&", $response);
  foreach($response as $data) {
    echo $data . "<br />";
  }


   ?>
</p>

<div class = "row">
  <div class = "col-md-4">
    <h1>DoCapture</h1>
    <form method = 'post' action = 'https://api-3t.sandbox.paypal.com/nvp'>
      <input type = "hidden" name = "USER" value = "wpittmanBusiness1_api1.paypal.com" />
      <input type = "hidden" name = "PWD" value = "Q4MJKLB5BK7FHPNY"  />
      <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AadoqWmrIeK2Kws1Upn1JMc5P6pz" />
      <input type = "hidden" name = "AMT" value = "20.00" />
      <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
      <input type = "hidden" name = "COMPLETETYPE" value = "Complete" />
      <input type = "hidden" name = "VERSION" value = "58.0" />
      <input type = "text" name = "AUTHORIZATIONID"  />
      <input type = "submit" name = "METHOD" value = "DoCapture" />
    </form>
  </div>

    <div class = "col-md-4">
      <h1>DoVoid</h1>
      <form method = 'post' action = "https://api-3t.sandbox.paypal.com/nvp">
        <input type = "hidden" name = "USER" value = "wpittmanBusiness1_api1.paypal.com" />
        <input type = "hidden" name = "PWD" value = "Q4MJKLB5BK7FHPNY"  />
        <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AadoqWmrIeK2Kws1Upn1JMc5P6pz" />
        <input type = "hidden" name = "VERSION" value = "58.0" />
        <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
        <input type = "text" name = "AUTHORIZATIONID" />
        <input type = "submit" name = "METHOD" value = "DoVoid" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>GetTransactionDetails</h1>
      <form method = 'post' action = "https://api-3t.sandbox.paypal.com/nvp">
        <input type = "hidden" name = "USER" value = "wpittmanBusiness1_api1.paypal.com" />
        <input type = "hidden" name = "PWD" value = "Q4MJKLB5BK7FHPNY"  />
        <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AadoqWmrIeK2Kws1Upn1JMc5P6pz" />
        <input type = "hidden" name = "VERSION" value = "58.0" />
        <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
        <input type = "text" name = "TRANSACTIONID" placeholder="transId"/>
        <input type = "submit" name = "METHOD" value = "GetTransactionDetails" />
      </form>
    </div>
</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>RefundTransaction</h1>
    <form method = 'post' action = "https://api-3t.sandbox.paypal.com/nvp">
      <input type = "hidden" name = "USER" value = "wpittmanBusiness1_api1.paypal.com" />
      <input type = "hidden" name = "PWD" value = "Q4MJKLB5BK7FHPNY"  />
      <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AadoqWmrIeK2Kws1Upn1JMc5P6pz" />
      <input type = "hidden" name = "VERSION" value = "58.0" />
      <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
      <input type = "text" name = "TRANSACTIONID" placeholder="transId"/><br />
      <input type = "radio" name = "REFUNDTYPE" value = "Full" checked />Full
      <input type = "radio" name = "REFUNDTYPE" value = "Partial" />Partial<br />
      <input type = "text" name = "AMT" placeholder = "only if partial refund" /><br /><br />
      <input type = "submit" name = "METHOD" value = "RefundTransaction" />
    </form>
  </div>
</div>
</div>

  <script src = "../script.js"></script>
  </body>
  </html>
