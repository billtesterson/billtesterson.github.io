<?php
$url = $_REQUEST['url'];

$headers[] = "Content-Type: application/json";
$headers[] = "Authorization: Bearer A21AAEcgqxes76DtXw3ufIzv-yNXvxTjc756FjKTF2EP5UpVD4s1JaLJW_s3V8m9FRSe2F5RzxfBZLeXG7vTaQlh1FJZVU0pg";

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
    "total": "30.11",
    "currency": "USD",
    "details": {
      "subtotal": "30.00",
      "tax": "0.07",
      "shipping": "0.03",
      "handling_fee": "1.00",
      "shipping_discount": "-1.00",
      "insurance": "0.01"
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
      "tax": "0.01",
      "sku": "1",
      "currency": "USD"
      },
      {
      "name": "handbag",
      "description": "Black handbag.",
      "quantity": "1",
      "price": "15",
      "tax": "0.02",
      "sku": "product34",
      "currency": "USD"
      }
    ],
    "shipping_address": {
      "recipient_name": "Brian Robinson",
      "line1": "4th Floor",
      "line2": "Unit #34",
      "city": "San Jose",
      "country_code": "US",
      "postal_code": "95131",
      "phone": "011862212345678",
      "state": "CA"
    }
    }
  }
  ],
  "note_to_payer": "Contact us for any questions on your order.",
  "redirect_urls": {
  "return_url": "https://www.paypal.com/return",
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
echo "Request: $request <br /><br />";

echo "Response: $response";


?>

  <script src = "../script.js"></script>
  </body>
  </html>
