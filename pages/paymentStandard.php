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
  <h1>Payment Standard</h1>

  <br>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="C4CH9J8A3JGHQ">
<input type = "hidden" name = "landing_page" value = "BILLING" />
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<h1>Subscribe</h1>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="T7RPY47H7CWT2">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="drums">
<input type="hidden" name="item_number" value="123">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="src" value="1">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHosted">
<table>
<tr><td><input type="hidden" name="on0" value="Terms">Terms</td></tr><tr><td><select name="os0">
	<option value="1">1 : £30.00 GBP - monthly</option>
	<option value="2">2 : £60.00 GBP - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Name">Name</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="option_select0" value="1">
<input type="hidden" name="option_amount0" value="30.00">
<input type="hidden" name="option_period0" value="M">
<input type="hidden" name="option_frequency0" value="1">
<input type="hidden" name="option_select1" value="2">
<input type="hidden" name="option_amount1" value="60.00">
<input type="hidden" name="option_period1" value="M">
<input type="hidden" name="option_frequency1" value="1">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<br /><br />
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="Z5BLMXEGNFM32">
<table id ="samp">
<tr id = "row1"><td><input type="hidden" name="on0" value="Choose Quantity">Choose Quantity</td></tr><tr><td><select name="os0" id = "select">
	<option value="1pair">1pair $1.00 USD</option>
	<option value="2pair">2pair $2.00 USD</option>
	<option value="3pair">3pair $3.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" id = 'sampimg'>
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="50px" height="40px">
</form>

<h1>NEW BUTTON</h1>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="Y3CNYH6NJKL8S">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<h1>Add to Cart Test</h1>
<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="EAXCCCN965D6S">
<table>
<tr><td><input type="hidden" name="on0" value="list">list</td></tr><tr><td><select name="os0">
	<option value="Option 1">Option 1 $1.00 USD</option>
	<option value="Option 2">Option 2 $2.00 USD</option>
	<option value="Option 3">Option 3 $3.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<h1>GB add to cart</h1>
<?php
$str = "Art Course Payments - choose an option from the drop down box below";
echo $str . "<br />";
echo strlen($str);
 ?>
<br />
<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="wpittmanGB@paypal.com">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="art">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<table>
<tr><td><input type="hidden" name="on0" value="Art Course Payments - choose an option from the drop down box below">Art Course Payments - choose an option from the drop down box below</td></tr><tr><td><select name="os0">
	<option value="Deposit weekend art course">Deposit weekend art course £95.00 GBP</option>
	<option value="Balance weekend art course">Balance weekend art course £100.00 GBP</option>
	<option value="Payment in Full weekend art course">Payment in Full weekend art course £195.00 GBP</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="option_select0" value="Deposit weekend art course">
<input type="hidden" name="option_amount0" value="95.00">
<input type="hidden" name="option_select1" value="Balance weekend art course">
<input type="hidden" name="option_amount1" value="100.00">
<input type="hidden" name="option_select2" value="Payment in Full weekend art course">
<input type="hidden" name="option_amount2" value="195.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.sandbox.paypal.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<ul id = "list">
  <li>

  </li>
</ul>

</div>
<script src = "../jquery-3.2.1.min(1).js"></script>
<script src = "../script.js"></script>
</body>
</html>
