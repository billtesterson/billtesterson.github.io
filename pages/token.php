<?php

$today = date("YmdHis");

$url = $_REQUEST['URL'];
$tokenid = $_REQUEST['SECURETOKENID'];
$vendor = $_REQUEST['VENDOR'];
$user = $_REQUEST['USER'];
$partner = $_REQUEST['PARTNER'];
$pwd = $_REQUEST['PWD'];
$amt = $_REQUEST['AMT'];
$trxtype = $_REQUEST['TRXTYPE'];
$token = $_REQUEST['CREATESECURETOKEN'];



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

$token_request = "VENDOR=$vendor&USER=$user&PWD=$pwd&PARTNER=$partner&AMT=$amt&TRXTYPE=$trxtype&CREATESECURETOKEN=$token&SECURETOKENID=$tokenid&TEMPLATE=MOBILE&RETURNURL=http://127.0.0.1/training/pages/payflow.php";

//$token_request = "USER=wpittmanpro&VENDOR=wpittmanpro&PARTNER=PayPal&PWD=Element7430&CREATESECURETOKEN=Y&SECURETOKENID=$tokenid&TRXTYPE=A&AMT=39.48&INVNUM=SU-20180801-5000&USER1=5af2b523-1111-4a39-99e6-78b5effe5deb&USER2=2&CUSTCODE=88e1f5e7-fd5d-40b7-824c-b1a6aa5945dd&CURRENCY=USD&BUTTONSOURCE=ideaLEVER_SP&BILLTOFIRSTNAME=Test&BILLTOLASTNAME=Test&BILLTOSTREET=123 main st&BILLTOCITY=omaha&BILLTOSTATE=NE&BILLTOZIP=68144&BILLTOCOUNTRY=840&SHIPTOFIRSTNAME=Test&SHIPTOLASTNAME=Test&SHIPTOSTREET=123 //main st&SHIPTOCITY=omaha&SHIPTOSTATE=NE&SHIPTOZIP=68144&SHIPTOCOUNTRY=840&EMAIL=test@mail.com&L_NAME0=School Labels Pack&L_DESC0=School_Labels_Pack&L_COST0=35.98&L_QTY0=1&L_SKU0=ZSC&ITEMAMT=35.98&TAXAMT=0.00&FREIGHTAMT=3.50&RETURNURL=https://nb.staging.commercecm.com/paypal.aspx&SILENTPOSTURL=https://nb.staging.commercecm.com/paypal/paypalsilentpost.aspx&ERRORURL=https://nb.staging.commercecm.com/test_styles.html&TEMPLATE=MOBILE";

curl_setopt($ch, CURLOPT_POSTFIELDS, $token_request);

$token_response = curl_exec($ch);

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


<?php echo "Request: $token_request";?>
<br />
<br />
<?php echo "Response: $token_response"; ?>

<?php

$token_ar = explode('&', $token_response);


$token_id = $token_ar[2];
$token1 = explode('=', $token_id);
$token = $token_ar[1];
$t = explode('=', $token);
$secure_token = $t[1];




echo "<iframe src = 'https://pilot-payflowlink.paypal.com?SECURETOKEN=$secure_token&SECURETOKENID=$tokenid&MODE=TEST' width='490px' height='565px' border='0'
  frameborder='0' scrolling='no' allowtransparency='true'></iframe>";

?>




</div>
  <script src = "../jquery-3.2.1.min(1).js"></script>
  <script src = "../script.js"></script>
  </body>
  </html>
