<?php
 $actionType = $_REQUEST['actionType'];
 $headers[] = "X-PAYPAL-SECURITY-USERID: wpittmanHere_api1.paypal.com";
 $headers[] = "X-PAYPAL-SECURITY-PASSWORD: KF7W7LPSDUHW9NBP";
 $headers[] = "X-PAYPAL-SECURITY-SIGNATURE: A5v94doyzkAL45GWSOpp3GzSpU1aAG1YO85W.t9ychusFVJndzqXJsfL";
 $headers[] = "X-PAYPAL-REQUEST-DATA-FORMAT: NV";
 $headers[] = "X-PAYPAL-RESPONSE-DATA-FORMAT: NV";
 $headers[] = "X-PAYPAL-APPLICATION-ID: APP-80W284485P519543T";
 $headers[] = "X-PAYPAL-SANDBOX-EMAIL-ADDRESS: wpittmanHere@paypal.com";

$url = "https://svcs.sandbox.paypal.com/AdaptivePayments/Pay";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request ="requestEnvelope.errorLanguage=en_US&actionType=$actionType&senderEmail=wpittmanHere@paypal.com&requireShippingAddressSelection=true&cancelUrl=https://rest-wpittman.c9users.io/urls/cancel.php
&currencyCode=USD&receiverList.receiver(0).email=wpittman@paypal.com&receiverList.receiver(0).amount=100.00
&returnUrl=https://rest-wpittman.c9users.io/urls/redirect.php";

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
  <?php
          echo $request . "<br>";
          $res_arr = explode("&", $response);
          foreach($res_arr as $index) {
              echo $index . "<br>";
          }

          $pay_key = explode("=", $res_arr[4]);

          ?>
          <h1>ExecutePayment</h1>
        <form method = "post" action = "adaptive3.php">
            <input type = "text" name = "payKey" value = "<?php echo $pay_key[1]; ?>">
            <input type = "submit">
        </form>

  <script src = "../script.js"></script>
  </body>
  </html>
