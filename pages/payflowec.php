<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 " lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <link rel = "stylesheet" href = "../css/bootstrap.min.css" />
  <link rel = "stylesheet" href = "../style.css" />

</head>
<body>
  <script>
  $(function(){
    $('#header').load('../nav.html');
  });
  </script>
  <div id = "header"></div>

<form id = "myContainer" method = 'post' action = 'checkoutec.php'>
  <script>
    window.paypalCheckoutReady = function () {
      paypal.checkout.setup('T7RPY47H7CWT2', {
        environment: 'sandbox',
        container: 'myContainer'
      });
    };
  </script>
  <input type = 'hidden' name = 'USER' value = 'wpittmanpro' />
  <input type = 'hidden' name = 'VENDOR' value = 'wpittmanpro' />
  <input type = 'hidden' name = 'PARTNER' value = 'paypal' />
  <input type = 'hidden' name = 'PWD' value = 'Element7430' />
  <input type = 'hidden' name = 'TRXTYPE' value = 'S' />
  <input type = 'hidden' name = 'TENDER' value = 'P' /><!-- always P-->
  <input type = 'hidden' name = 'ACTION' value = 'S' />
  <input type = 'hidden' name = 'AMT' value = '2.00' />
  <input type = 'hidden' name = 'CURRENCY' value = 'USD' />
  <input type = 'hidden' name = 'RETURNURL' value = 'https://google.com' />
  <input type = 'hidden' name = 'CANCELURL' value = 'https://google.com' />
</form>

  <script src="//www.paypalobjects.com/api/checkout.js" async></script>
  </body>
  </html>
