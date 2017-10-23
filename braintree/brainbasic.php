<?php
//Braintree Library
require 'phpsdk/braintree-php-3.25.0/lib/Braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('bzbbncx5d3dcgtsx');
Braintree_Configuration::publicKey('n6wj69wvs9mz8m3y');
Braintree_Configuration::privateKey('d5589091f11b609ee6f969a7a875c455');

$clientToken = Braintree_ClientToken::generate();

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
  <meta charset="utf-8">
  <!--load required client component-->
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
  <div class = "row">
    <div class = "col-md-4 col-md-offset-4">
      <h1>basic integration</h1>
    </div>
  </div>

    <form id = "gateway" method = "POST" action = "transaction.php">
    <div id = "dropin-container"></div>
    <input type = 'hidden' value = "Purchase" />
    <input type = "hidden" name = "payment_method_nonce" id = "nonce" />
      <input type = 'submit'>Request payment method</button>
    </form>
    <!--load braintree-->
    <script src="https://js.braintreegateway.com/web/dropin/1.8.0/js/dropin.min.js"></script>

      <script>
        var form = document.querySelector('#gateway');
        var nonceInput = document.querySelector('#nonce');
        braintree.dropin.create({
          authorization: '<?php echo $clientToken; ?>',
          container: '#dropin-container',
          paypal: {
            flow: 'checkout',
            amount: '10.00',
            currency: 'USD'
          }
        }, function(createErr, instance) {
          if(createErr) {
            console.error(createErr);
            return;
          }
          form.addEventListener('submit', function(event) {
            event.preventDefault();
            instance.requestPaymentMethod(function(requestPaymentMethodErr, payload) {
              if(requestPaymentMethodErr) {
                console.error(requestPaymentMethodErr);
                return;
              }
              //submit payload nonce to server
                nonceInput.value = payload.nonce;
                form.submit();
              console.log(payload);
            });
          });
        });
      </script>
      <br />
      <br />
    </div>




  <script src = "../script.js"></script>
  </body>
  </html>
