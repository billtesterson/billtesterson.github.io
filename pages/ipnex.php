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
  <a href = "../index.php">Back</a>
  <div class = "container">
    <div class = "row">
      <div class ="col-md-4 col-md-offset-4">
        <div class = "jumbotron">
          <h1>IPN</h1>
        </div>
      </div>
    </div>

    <div class = "row">
      <div class = 'col-md-4'>
        <h1>IPN</h1>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type = "hidden" name = "notify_url" value = "https://webhooks-listener-wpittman.c9users.io/ipn.php" />
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>

      <div class = "col-md-4">
        <h1>PDT</h1>
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="746JVHPT3A5YJ">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
    </div>
  </div>


  <script src = "../script.js"></script>
  </body>
  </html>
