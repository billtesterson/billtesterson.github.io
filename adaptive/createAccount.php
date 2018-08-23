<?php

$ip = $_SERVER['REMOTE_ADDR'];
$headers[] = "X-PAYPAL-SECURITY-USERID: wpittman_api1.paypal.com";
$headers[] = "X-PAYPAL-SECURITY-PASSWORD: C7CM265TPAMF2LM7";
$headers[] = "X-PAYPAL-SECURITY-SIGNATURE: AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3";
$headers[] = "X-PAYPAL-REQUEST-DATA-FORMAT: NV";
$headers[] = "X-PAYPAL-RESPONSE-DATA-FORMAT: NV";
$headers[] = "X-PAYPAL-APPLICATION-ID: APP-80W284485P519543T";
$headers[] = "X-PAYPAL-SANDBOX-EMAIL-ADDRESS: wpittman@paypal.com";
$headers[] = "X-PAYPAL-DEVICE-IPADDRESS: $ip";

$email = $_REQUEST['email'];



$url = "https://svcs.sandbox.paypal.com/AdaptiveAccounts/CreateAccount";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = "requestEnvelope.errorLanguage=en_US&accountType=Personal&senderEmail=wpittman@paypal.com&cancelUrl=https://rest-wpittman.c9users.io/urls/cancel.php";
$request .= "&dateofBirth=1981-01-02Z&contactPhoneNumber=2055992352";
$request .= "&currencyCode=USD&citizenshipCountryCode=US&preferredLanguageCode=en_US&emailAddress=$email";
$request .= "&registrationType=WEB&name.firstName=Test&name.middleName=middle&name.lastName=TEST&address.line1=123 Main St&address.city=Omaha&address.state=NE&address.postalCode=68144&address.countryCode=US";
$request .= "&createAccountWebOptions.returnUrl=http://google.com";

/*$request = "requestEnvelope.errorLanguage=en_US&accountType=Personal&dateOfBirth=1981-01-02Z&contactPhoneNumber=205-599-2352&currencyCode=USD&citizenshipCountryCode=US&preferredLanguageCode=en_US&emailAddress=test@mail.com&registrationType=WEB&name.firstName=GTT Firstname&name.middleName=GTT Middlename&name.lastName=GTT Lastname&address.line1=1 Anything Street&address.city=Birmingham&address.state=AL&address.postalCode=35212&address.countryCode=US&createAccountWebOptions.returnUrl=http://paypaltech.com/guido/redirect.htm";*/

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

          echo $request . "<br><br /><br />";
          $res_arr = explode("&", $response);
          foreach($res_arr as $index) {
              echo $index . "<br>";

          }
$redirect = urldecode($res_arr[6]);

$redirect_url = explode('redirectURL=', $redirect);

/*$redirect_url = explode('=', $redirect);
var_dump($redirect_url);

$str = "";
for($i = 1; $i <= count($redirect_url); $i++) {

  $str .= $redirect_url[$i];
}
var_dump($str);*/

          ?>
          <h1>Redirect:</h1> <p>
            to: "<?php echo $redirect_url[1]?>"
          </p>
          <a href = "<?php echo $redirect_url[1]?>">Click Here</a>


  <script src = "../script.js"></script>
  </body>
  </html>
