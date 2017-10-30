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
    <div class = "row">
      <div class ="col-md-4 col-md-offset-4">
        <div class = "jumbotron">
          <h1>Express</h1>
          <h3>Checkout</h3>
        </div>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <a href = "sdk/merchant-sdk-php/samples"><h1>Classic Merchant</h1></a>
      </div>

      <div class = "col-md-4">
        <a href = "rest.php"><h1>REST APIs</h1></a>
      </div>


    <div class = "col-md-4">
      <a href = "storeForm.php"><h1>Store Card Info(php)</h1></a>
    </div>
  </div>

  <div class = "row">
    <div class = "col-md-4">
      <a href = "button.html"><h1>Basic Button</h1></a>
    </div>

    <div class = "col-md-4">
      <h1>SetExpressCheckout</h1>
      <form method = 'post' action = "setec.php">
        <input type = "hidden" name = "METHOD" value = "SetExpressCheckout" />
        <input type = "hidden" name = "URL" value = "https://api-3t.sandbox.paypal.com/nvp" />
        <input type = "hidden" name = "PAYMENTREQUEST_0_AMT" value = "104.86" />
        <input type = "hidden" name = "RETURNURL" value = "setec.php" />
        <input type = "hidden" name = "CANCELURL" value = "setec.php" />
        <input type = "hidden" name = "NOSHIPPING" value = "1" />
        <input type = "hidden" name = "SOLUTIONTYPE" value = "SOLE" />
        <input type = "submit" />
      </form>
    </div>
  </div>
  </div>


  <script src = "../jquery-3.2.1.min(1).js"></script>
  <script src = "../script.js"></script>
  </body>
  </html>
