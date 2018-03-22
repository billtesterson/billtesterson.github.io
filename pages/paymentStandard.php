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
<br />
<div class = "row">
  <div class = "col-md-4">
  <h1>Payment Standard</h1>

  <br>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="C4CH9J8A3JGHQ">
<input type = "hidden" name = "landing_page" value = "BILLING" />
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

<div class = "col-md-4">
  <h1>Subscribe</h1>
  <p>
    1 mo. $5
  </p>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VHVAL2FG5DAC6">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

<div class = "col-md-4">
  <h1>Subscribe 2</h1>
  <p>
    1 mo. $10
  </p>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F8S3DEHTJSF7W">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>Subscribe 3</h1>
    <p>
      1 year $100
    </p>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3MS6K6A27VN4N">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

<div class = "col-md-4">
  <h1>Cancel Subscription Button</h1>
  <form method = "post" action = "paymentstandard2.php">
    <input type = "text" name = "METHOD" value = "BMManageButtonStatus" />
    <input type = "text" name = "HOSTEDBUTTONID" placeholder="HOSTEDBUTTONID" />
    <input type = "text" name = "BUTTONSTATUS" value = "DELETE" />
    <input type = "submit" />
  </form>
</div>

<div class = "col-md-4">
  <h1>New Subscription test create</h1>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="9VN9EHJT2DDXG">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>FISHING test</h1>
    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZJ3HLRQ2X6UNY">
<table>
<tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
	<option value="Angler">Angler $80.00 USD</option>
	<option value="Fish 2">Fish 2 $100.00 USD</option>
	<option value="Fish 3">Fish 3 $200.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Location">Location</td></tr><tr><td><select name="os1">
	<option value="omaha">omaha </option>
	<option value="la vista">la vista </option>
	<option value="lincoln">lincoln </option>
</select> </td></tr>
<tr><td><input type="hidden" name="on2" value="Phone">Phone</td></tr><tr><td><input type="text" name="os2" maxlength="200"></td></tr>
<tr><td><input type="hidden" name="on3" value="Date">Date</td></tr><tr><td><input type="text" name="os3" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

  </div>
</div>



</div>
<script src = "../jquery-3.2.1.min(1).js"></script>
<script src = "../script.js"></script>
</body>
</html>
