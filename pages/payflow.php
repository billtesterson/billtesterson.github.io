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

  <a href = "../index.html">Home</a>
<h1>Payflow</h1>

<div class = "row">
<div class = "col-md-4">
<p>
  Basic
</p>
<form method="POST" action="https://pilot-payflowlink.paypal.com">
<input type="hidden" name="LOGIN" value="wpittman">
<input type="hidden" name="PARTNER" value="PayPal">
<input type="hidden" name="AMOUNT" value="500">
<input type="hidden" name="TYPE" value="A">
<input type="submit" value="Click here to Purchase">
</form>

</div>
<div class = "col-md-4">

<p>
  TOKEN
</p>

<form method="POST" action="https://pilot-payflowpro.paypal.com">
  <!-- The following fields are required: -->
  <input type="hidden" name="VENDOR" value="wpittman"/>
  <input typpe="hidden" name="USER" value="wpittman" />
  <input type = "hidden" name ="PWD" value = "Element7430" />
  <input type="hidden" name="PARTNER" value="paypal">
  <input type="hidden" name="AMT" value="100">
  <input type="hidden" name="TRXTYPE" value="A">
  <input type="hidden" name="RETURNURL" value="file:///C:/wamp64/www/training/index.html" />
  <input type="hidden" name="CANCELURL" value = "file:///C:/wamp64/www/training/index.html" />
  <!-- See “Payflow Link Transaction Types” on page63for the list of valid transaction types. -->
  <!-- The following fields are optional you can choose these or others: -->
  <input type="hidden" name="CREATESECURETOKEN" value = "Y" />
  <input type = "hidden" name = "SECURETOKENID" value = "63246546787774346436" />

  <input type = "submit" value = "click here for token" />
</form>

</div>
<div class = "col-md-4">
  <p>
    Send token
  </p>

<form method="POST" action="https://pilot-payflowlink.paypal.com">
<input type="hidden" name = "SECURETOKENID" value = "" />
<input type="hidden" name = "SECURETOKEN" value = "" />
<input type="hidden" name = "MODE" value = "TEST" />
<input type = "submit" value = "click here to pay" />
</form>
</div>
</div>

<p id = "text">

</p>


<!--
Form POST URL = https://payflowlink.paypal.com
<br/>VENDOR=wpittman
<br/>PARTNER=PayPal
<br/>PWD=Element7430
<br/>CREATESECURETOKEN=Y
<br/>TRXTYPE=A
<br/>AMT=6.66
<br/>TENDER=C
<br/>CURRENCY=USD
<br/>PONUM=98765
<br/>NAME=Bill Testerson
<br/>STREET=111 Main St
<br/>CITY=Omaha
<br/>ZIP=68144
<br/>EMAIL=tester@test.com
<br/>PHONE=4025555555
<br/>VERVOSITY=HIGH
<br/>SECURETOKENID=69201709281506611051<br />-->

<!--
TENDER=&PWD=Element7430&USER=wpittman&VENDOR=wpittman
&PARTNER=PayPal&AMT=1.00&TRXTYPE=A&NAME=Crash OverRide&STREET=123 Main St
&CITY=CyberCity&STATE=CA&ZIP=21345&COUNTRY=US&COMMENT1=PayPal-Tech&COMMENT2=Testing
&VERBOSITY=HIGH&BUTTONSOURCE=BobsTestPage&CREATESECURETOKEN=Y&SECURETOKENID=402867530912241
-->
<script>
$("#text").write("Hello");
</script>


<script src = "../jquery-3.2.1.min(1).js"></script>
<script src = "../script.js"></script>
</body>
</html>
