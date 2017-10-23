<?php
require 'phpsdk/braintree-php-3.25.0/lib/Braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('bzbbncx5d3dcgtsx');
Braintree_Configuration::publicKey('n6wj69wvs9mz8m3y');
Braintree_Configuration::privateKey('d5589091f11b609ee6f969a7a875c455');

$nonceFromTheClient = $_POST['payment_method_nonce'];

/*$result = Braintree_PaymentMethod::create([
  'customerId' => '1234',
  'paymentMethodNonce' => $nonceFromTheClient,
  'options' => [
    'makeDefault' => true
  ]
]);
$result->paymentMethod->isDefault();
*/
$result = Braintree_Transaction::sale([
  'amount' => '10.00',
  'paymentMethodNonce' => $nonceFromTheClient,
  'options' => [
    'submitForSettlement' => True
  ]
]);


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
  <a href = "brainbasic.php">Back</a>
  <div class = "container">
    
  <?php  echo '<pre>';
print_r($result);
echo '</pre>'; ?>
  </div>
<script>

</script>
  <script src = "../script.js"></script>
  </body>
  </html>
