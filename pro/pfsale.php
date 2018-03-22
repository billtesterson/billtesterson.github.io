<?php
$today = date("YmdHis");

$url = $_REQUEST['URL'];
$vendor = $_REQUEST['VENDOR'];
$user = $_REQUEST['USER'];
$partner = $_REQUEST['PARTNER'];
$pwd = $_REQUEST['PWD'];
$amt = $_REQUEST['AMT'];
$street = $_REQUEST['BILLTOSTREET'];
$zip = $_REQUEST['BILLTOZIP'];
$state = $_REQUEST['BILLTOSTATE'];
$city = $_REQUEST['BILLTOCITY'];
$acct = $_REQUEST['ACCT'];
$cvv2 = $_REQUEST['CVV2'];
$expdate = $_REQUEST['EXPDATE'];
$fname = $_REQUEST['BILLTOFIRSTNAME'];
$lname = $_REQUEST['BILLTOLASTNAME'];

$headers[] = "Content-Type: text/namevalue";

$headers[]= "X-VPS-CLIENT-TIMEOUT: 90";
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

$request = "USER=$user&VENDOR=$vendor&PWD=$pwd&PARTNER=$partner&BILLTOFIRSTNAME=$fname&BILLTOLASTNAME=$lname&BILLTOSTREET=$street&BILLTOCITY=$city&BILLTOSTATE=$state&BILLTOZIP=$zip&ACCT=$acct&CVV2=$cvv2&EXPDATE=$expdate&TRXTYPE=S&TENDER=C&AMT=$amt";

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$response = curl_exec($ch);

function format($str) {
  $str = explode("&", $str);
  foreach($str as $data) {
    echo $data . "<br />";
  }
}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
format($response);
echo "<br /><br />";
echo $response;
?>
</body>
</html>
