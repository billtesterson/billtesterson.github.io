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
    <h1>Adaptive Payments</h1>
    <form method = "post" action = "adaptive2.php">
      <input type = "text" name = "actionType" placeholder = "PAY, CREATE, OR PAY_PRIMARY" />
      <input type = "submit" />
    </form>

    <div class = "row">
      <div class = "col-md-4">
        <h1>Mass Payments API</h1>
        <form method = "POST" action = "masspay.php">
          <input type = "hidden" name = "USER" value = "wpittman_api1.paypal.com" />
          <input type = "hidden" name = "PWD" value = "C7CM265TPAMF2LM7" />
          <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3" />
          <input type = "hidden" name = "VERSION" value = "2.3" />
          <input type = "hidden" name = "METHOD" value = "MassPay" />
          <input type = "hidden" name = "RECEIVERTYPE" value = "EmailAddress" />
          <input type = "text" name = "L_EMAIL0" placeholder = "email" />
          <input type = "text" name = "L_AMT0" placeholder = "amt" />
          <input type = "text" name = "L_EMAIL1" placeholder = "email" />
          <input type = "text" name = "L_AMT1" placeholder = "amt" />
          <input type = "text" name = "L_NOTE0" placeholder = "note" />
          <input type = "text" name = "L_NOTE1" placeholder = "note2" />
          <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
          <input type = "submit" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Mass Payments API PHONE</h1>
        <form method = "POST" action = "masspay2.php">
          <input type = "hidden" name = "USER" value = "wpittman_api1.paypal.com" />
          <input type = "hidden" name = "PWD" value = "C7CM265TPAMF2LM7" />
          <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3" />
          <input type = "hidden" name = "VERSION" value = "2.3" />
          <input type = "hidden" name = "METHOD" value = "MassPay" />
          <input type = "hidden" name = "RECEIVERTYPE" value = "PhoneNumber" />
          <input type = "text" name = "L_RECEIVERPHONE0" placeholder = "phone" />
          <input type = "text" name = "L_AMT0" placeholder = "amt" />
        <!--  <input type = "text" name = "L_RECEIVERPHONE1" placeholder = "phone" />
          <input type = "text" name = "L_AMT1" placeholder = "amt" />-->
          <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
          <input type = "submit" />
        </form>
      </div>
    </div>
</div>

<script src = "../script.js"></script>
  </body>
  </html>
