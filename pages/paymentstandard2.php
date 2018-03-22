<?php
$today = date("YmdHis");

$url = "https://api-3t.sandbox.paypal.com/nvp";
$user = "wpittman_api1.paypal.com";
$pwd = "C7CM265TPAMF2LM7";
$signature = "AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3";
$method = $_REQUEST['METHOD'];
$id = $_REQUEST['HOSTEDBUTTONID'];
$status = $_REQUEST['BUTTONSTATUS'];
$version = "204";

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

$request = "USER=$user&PWD=$pwd&SIGNATURE=$signature&METHOD=$method&HOSTEDBUTTONID=$id&BUTTONSTATUS=$status&VERSION=$version";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);
//formats request/response string
function format($str) {
  $str = explode("&", $str);
  foreach($str as $data) {
    echo $data . "<br />";
  }
}

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
    <h1>Cancelled Subscripton</h1>
    <?php
    echo "Request:<br />";
    format($request);
    echo "<br /><br />Response:<br />";
    format($response);
    ?>
  </div>


  <script src = "../script.js"></script>
  </body>
  </html>
