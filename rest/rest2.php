<?php
$url = $_REQUEST['url'];

$headers[] = "Content-Type: application/json";
$headers[] = "Authorization: Bearer A21AAF6mXhLppCq2u-x0Xrghl6TQJqx1tpqvoeBZz70eCSpqXKUSWWKg4HrlptHSqSSH45pteE4k0SP3XrZHLMATrpjmfNVFg";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$request = '{
  "intent": "sale",
  "payer": {
  "payment_method": "paypal"
  },
  "transactions": [
  {
    "amount": {
    "total": "15.00",
    "currency": "USD",
    "details": {
      "subtotal": "15.00",
      "tax": "0.00",
      "shipping": "0.00",
      "handling_fee": "0.00",
      "shipping_discount": "0.00",
      "insurance": "0.00"
    }
    },
    "description": "The payment transaction description.",
    "custom": "EBAY_EMS_90048630024435",
    "invoice_number": "48787589673",
    "payment_options": {
    "allowed_payment_method": "INSTANT_FUNDING_SOURCE"
    },
    "soft_descriptor": "ECHI5786786",
    "item_list": {
    "items": [
      {
      "name": "hat",
      "description": "Brown hat.",
      "quantity": "5",
      "price": "3",
      "tax": "0.00",
      "sku": "1",
      "currency": "USD"
      }
    ],
    "shipping_address": {
      "recipient_name": "testy test",
      "line1": "123 main st",
      "city": "Omaha",
      "country_code": "US",
      "postal_code": "68144",
      "phone": "011862212345678",
      "state": "NE"
    }
    }
  }
  ],
  "note_to_payer": "Contact us for any questions on your order.",
  "redirect_urls": {
  "return_url": "https://127.0.0.1",
  "cancel_url": "https://www.paypal.com/cancel"
  }
}';

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

$result = json_decode($response, true);

var_dump($result);


?>

<form method = "post" action = '<?php echo $result['links'][1]['href'];?>'>
  <input type = 'submit' />
</form>
<script>

</script>
  <script src = "../script.js"></script>
  </body>
  </html>
