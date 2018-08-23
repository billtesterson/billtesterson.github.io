<?php
$headers[] = "X-PAYPAL-SECURITY-USERID: wpittman_api1.paypal.com";
$headers[] = "X-PAYPAL-SECURITY-PASSWORD: C7CM265TPAMF2LM7";
$headers[] = "X-PAYPAL-SECURITY-SIGNATURE: AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3";
$headers[] = "X-PAYPAL-REQUEST-DATA-FORMAT: JSON";
$headers[] = "X-PAYPAL-RESPONSE-DATA-FORMAT: JSON";
$headers[] = "X-PAYPAL-APPLICATION-ID: APP-80W284485P519543T";


$url = 'https://svcs.sandbox.paypal.com/AdaptivePayments/Pay';

$payload = '{
  "actionType": "PAY",
  "currencyCode": "USD",
  "receiverList": {
    "receiver": [{
      "amount": "1.00",
      "email": "wpittman@paypal.com"
    }]
  },
  "returnUrl": "http://127.0.0.1/training/adaptive/adaptive1.php",
  "cancelUrl": "http://127.0.0.1/training/adaptive/adaptive1.php",
  "requestEnvelope": {
    "errorLanguage": "en_US",
    "detailLevel": "ReturnAll"
  }
}';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = $payload;

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
  <script src="https://www.paypalobjects.com/js/external/dg.js" type="text/javascript"></script>
</head>
<body>
  <div class = "container">
  <script>
  $(function(){
    $('#header').load('../nav.html');
  });
  </script>
  <div id = "header"></div>
<?php
$res = json_decode($response, true);
var_dump($res);
$res = json_decode($response);

$payKey = $res->{'payKey'};


?>
<body>
<form action="https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay" target="PPDGFrame" class="standard">
<label for="buy">Buy Now:</label>
<input type="image" id="submitBtn" value="Pay with PayPal" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif">
<input id="type" type="hidden" name="expType" value="light">
<input id="paykey" type="hidden" name="paykey" value="<?php echo $payKey ?>">
</form>

<script type="text/javascript" charset="utf-8">
var embeddedPPFlow = new PAYPAL.apps.DGFlow({trigger: 'submitBtn'});
</script>

<button id = "redirectBtn" class = "btn btn-primary">Go to PayPal</button>
<script>
var redirect = "https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_ap-payment&paykey=" + "<?php echo $payKey?>";

document.getElementById("redirectBtn").onclick = function() {
  location.href = redirect;
}

</script>
</div>
  <script src = "../script.js"></script>
  </body>
  </html>
