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
$fname = $_REQUEST['BILLTOFIRSTNAME'];
$lname = $_REQUEST['BILLTOLASTNAME'];
$street = $_REQUEST['BILLTOSTREET'];
$city = $_REQUEST['BILLTOCITY'];
$state = $_REQUEST['BILLTOSTATE'];
$zip = $_REQUEST['BILLTOZIP'];
$country = $_REQUEST['BILLTOCOUNTRY'];
$echo = $_REQUEST['ECHODATA'];
$acct = $_REQUEST['ACCT'];
$expdate = $_REQUEST['EXPDATE'];
$cvv2 = $_REQUEST['CVV2'];

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

$request = "VENDOR=$vendor&USER=$user&PWD=$pwd&PARTNER=$partner&AMT=$amt&TRXTYPE=$trxtype&TENDER=$tender&BILLTOFIRSTNAME=$fname&BILLTOLASTNAME=$lname&BILLTOSTREET=$street&
BILLTOCITY=$city&BILLTOSTATE=$state&BILLTOZIP=$zip&BILLTOCOUNTRY=$country&ECHODATA=$echo&ACCT=$acct&EXPDATE=$expdate&CVV2=$cvv2";

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
<?php echo "Request:" . $request;
echo "<br /><br /><br />Response:<br />";
echo $response;
?>

  <script src = "../script.js"></script>
  </body>
  </html>
