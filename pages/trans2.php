<?php
$today = date("YmdHis");

$url = "https://pilot-payflowlink.paypal.com";
/*$vendor = "wpittmanpro";
$user = "wpittmanpro";
$partner = "paypal";
$pwd = "Element7430";*/
$token = $_REQUEST['SECURETOKEN'];
$tokenid = $_REQUEST['SECURETOKENID'];
/*$acct = $_REQUEST['ACCT'];
$expdate = $_REQUEST['EXPDATE'];
$csc = $_REQUEST['CSC'];*/
$parm = $_REQUEST['PARMLIST'];

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

//turn off server and peer verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "SECURETOKEN=$token&SECURETOKENID=$tokenid&PARMLIST=$parm";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);
function format($str) {
  $str = explode("&", $str);
  foreach($str as $data) {
    echo $data . "<br />";
  }
}
?>
<html>
<head>

</head>
<body>
  <?php
  echo $request;
  echo $response;

  ?>
</body>
</html>
