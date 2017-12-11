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
  <h1>Billing Agreement</h1>
<!-- endpoint https://api-3t.sandbox.paypal.com/nvp -->
<form method = "POST" action = "bill2.php"/>
    <input type = "hidden" name = "USER" value = "us-30_api1.cri.com"/>
    <input type = "hidden" name = "PWD" value = "EYFNSNUSV85CT34Z">
    <input type = "hidden" name = "SIGNATURE" value = "AH57zE.nAaElaFFAysViNA9TIte1AxtSpBjx2HLqHJOiu2js3l1Kd48i"/>
    <input type = "hidden" name = "METHOD" value = "SetExpressCheckout"/>
    <input type = "hidden" name = "AMT" value = "10"/>
    <input type = "hidden" name = "PAYMENTACTION" value = "Sale"/>
    <input type = "hidden" name = "RETURNURL" value = "https://billing-wpittman.c9users.io/bill1.php"/>
    <input type = "hidden" name = "CANCELURL" value = "https://billing-wpittman.c9users.io/cancel.php"/>
    <input type = "hidden" name = "VERSION" value = "204.0"/>
    <input type = "submit">
</form>

  <script src = "../script.js"></script>
  </body>
  </html>
