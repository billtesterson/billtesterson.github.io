<?php

$today = date("YmdHis");

$url = "https://api-3t.sandbox.paypal.com/nvp";
$user = $_REQUEST['USER'];
$pwd = $_REQUEST['PWD'];
$sig = $_REQUEST['SIGNATURE'];
$version = $_REQUEST['VERSION'];
$method = $_REQUEST['METHOD'];
$receiver = $_REQUEST['RECEIVERTYPE'];
$email1 = $_REQUEST['L_EMAIL0'];
$amt1 = $_REQUEST['L_AMT0'];
$email2 = $_REQUEST['L_EMAIL1'];
$amt2 = $_REQUEST['L_AMT1'];
$currency = $_REQUEST['CURRENCYCODE'];
$note1 = $_REQUEST['L_NOTE0'];
$note2 = $_REQUEST['L_NOTE1'];

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

$request = "USER=$user&PWD=$pwd&SIGNATURE=$sig&VERSION=$version&METHOD=$method&RECEIVERTYPE=$receiver&L_EMAIL0=$email1&L_AMT0=$amt1&L_EMAIL1=$email2&L_AMT1=$amt2&CURRENCYCODE=$currency&L_NOTE0=$note1&L_NOTE1=$note2";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);

parse_str($response);
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
    $response = explode("&", $response);
    echo "Request: <br />";
    foreach($request as $input) {
      echo $input . "<br />";
    }
    echo "Reponse: <br />";
    foreach($response as $data) {
      echo $data . "<br />";
    }



  ?>
</div>


  <script src = "../script.js"></script>
  </body>
  </html>
