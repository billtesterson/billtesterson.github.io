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

  <a href = "../index.php">Home</a>
<div class ="container">

<div class = "row">
  <div class ="col-md-4 col-md-offset-4">
    <div class = "jumbotron">
      <h1>Payflow</h1>
    </div>
  </div>
</div>
<div class = "row">
<div class = "col-md-4">
<h1>Basic</h1>
<form method="POST" action="https://pilot-payflowlink.paypal.com">
<input type="hidden" name="LOGIN" value="wpittman">
<input type="hidden" name="PARTNER" value="PayPal">
<input type="hidden" name="AMOUNT" value="5.00">
<input type="hidden" name="TYPE" value="S">
<input type="submit" value="Click here to Purchase">
</form>

</div>
<div class = "col-md-4">

<h1>Token</h1>

<form method="POST" action="https://pilot-payflowpro.paypal.com">
  <!-- The following fields are required: -->
  <input type="hidden" name="VENDOR" value="wpittmanpro"/>
  <input type="hidden" name="USER" value="wpittmanpro" />
  <input type ="hidden" name ="PWD" value = "Element7430" />
  <input type="hidden" name="PARTNER" value="paypal">
  <input type="hidden" name="AMT" value="10">

  <input type="hidden" name="TRXTYPE" value="S">
  <input type="hidden" name="RETURNURL" value="file:///C:/wamp64/www/training/index.php" />
  <input type="hidden" name="CANCELURL" value = "file:///C:/wamp64/www/training/index.php" />
  <!-- See “Payflow Link Transaction Types” on page63for the list of valid transaction types. -->
  <!-- The following fields are optional you can choose these or others: -->
  <input type="hidden" name="CREATESECURETOKEN" value = "Y" />
  <input type = "hidden" name = "SECURETOKENID" value = "848657546"/>

  <input type = "submit" value = "click here for token" />
</form>

</div>
<div class = "col-md-4">
  <h1>Send Token</h1>

<form method="POST" action="https://pilot-payflowlink.paypal.com">
<input type="hidden" name = "SECURETOKENID" value = "848657546" />
<input type="hidden" name = "SECURETOKEN" value = "90T6KrVNigESxoeRWHnIaZw2j" />
<input type="hidden" name = "MODE" value = "TEST" />
<input type = "submit" value = "click here to pay" />
</form>
</div>
</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>Delayed Capture</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittmanpro" />
      <input type="hidden" name="USER" value="wpittmanpro" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name='AMT' value="80" />
      <input type="hidden" name="TRXTYPE" value="D" />
      <input type="hidden" name="ORIGID" value="A10AA71ABB7B" />
      <input type="hidden" name="CAPTURECOMPLETE" value="N"
      <input type="hidden" name="VERBOSITY" value="HIGH" />
      <input type="submit" value="Delayed Capture" />
    </form>
  </div>

  <div class = "col-md-4">
    <h1>Credit</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittmanpro" />
      <input type="hidden" name="USER" value="wpittmanpro" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name='AMT' value="200" />
      <input type="hidden" name="TRXTYPE" value="C" />
      <input type="hidden" name="ORIGID" value="A70AA582B9AE" />
      <input type="hidden" name="VERBOSITY" value="HIGH" />
      <input type="submit" value="Credit" />
    </form>
  </div>

  <div class = "col-md-4">
    <h1>Voice Authorization</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittmanpro" />
      <input type="hidden" name="USER" value="wpittmanpro" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name='AMT' value="200" />
      <input type="hidden" name="TRXTYPE" value="F" />
      <input type="hidden" name="TENDER" value="C" />
      <input type="hidden" name="AUTHCODE" value="123226" /><!--randomly enter 6-digit?-->
      <input type="hidden" name="ACCT" value="4111111111111111" />
      <input type="hidden" name="EXPDATE" value="0923" />
      <input type="hidden" name="CVV2" value="123" />
      <input type="hidden" name="BILLTOFIRSTNAME" value="Bill" />
      <input type="hidden" name="BILLTOLASTNAME" value="Testerson" />
      <input type="hidden" name="BILLTOSTREET" value="#3 Test St" />
      <input type="hidden" name="BILLTOCITY" value="Fake" />
      <input type="hidden" name="BILLTOSTATE" value="WV" />
      <input type="hidden" name="BILLTOZIP" value="12345" />
      <input type="hidden" name="VERBOSITY" value="HIGH" />
      <input type="submit" value="Voice Auth" />
    </form>
  </div>
</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>Void</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittman" />
      <input type="hidden" name="USER" value="wpittman" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name="TRXTYPE" value ="V" />
      <input type="hidden" name="ORIGID" value ="A10AA7106680" />
      <input type="hidden" name="AMT" value="200" />
      <input type="submit" value="Void" />
    </form>
  </div>

  <div class = "col-md-4">
    <h1>Duplicate OrderID</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittmanpro" />
      <input type="hidden" name="USER" value="wpittmanpro" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name="TRXTYPE" value ="S" />
      <input type="hidden" name="TENDER" value="C" />
      <input type="hidden" name="ORDERID" value="9876"  />
      <input type="hidden" name="AMT" value="200" />
      <input type="hidden" name="ACCT" value="5555555555554444" />
      <input type="hidden" name="EXPDATE" value="0920" />
      <input type="hidden" name="CVV2" value="123" />
      <input type="submit" value="Duplicate" />
    </form>
  </div>

  <div class ="col-md-4">
    <h1>Load Transaction</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittman" />
      <input type="hidden" name="USER" value="wpittman" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name="TRXTYPE" value="L" />
      <input type="hidden" name="TENDER" value="C" />
      <input type="hidden" name="ACCT" value="4111111111111111" />
      <input type="hidden" name="EXPDATE" value="0924" />
      <input type="hidden" name="CVV2" value="123" />
      <input type="hidden" name="BILLTOFIRSTNAME" value="Bill" />
      <input type="hidden" name="BILLTOLASTNAME" value="LoadTran" />
      <input type="hidden" name="BILLTOSTREET" value="#3 load St" />
      <input type="hidden" name="BILLTOCITY" value="Fake" />
      <input type="hidden" name="BILLTOSTATE" value="WV" />
      <input type="hidden" name="BILLTOZIP" value="12345" />
      <input type="hidden" name="VERBOSITY" value="HIGH" />
      <input type="submit" value="Load" />
    </form>
  </div>
</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>Inquiry Trans</h1>
    <form method="POST" action="https://pilot-payflowpro.paypal.com">
      <input type="hidden" name="VENDOR" value="wpittmanpro" />
      <input type="hidden" name="USER" value="wpittmanpro" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name="TRXTYPE" value ="I" />
      <input type="hidden" name="TENDER" value="C" />
      <input type="hidden" name="ORIGID" value="A70AA582B9AE"  />
      <input type="submit" value="Inquire" />
    </form>
  </div>


    <div class = "col-md-4">
      <h1>Reference Sale</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <input type="hidden" name="VENDOR" value="wpittman" />
        <input type="hidden" name="USER" value="wpittman" />
        <input type="hidden" name="PWD" value="Element7430" />
        <input type="hidden" name="PARTNER" value="paypal" />
        <input type="hidden" name='AMT' value="200" />
        <input type="hidden" name="TRXTYPE" value="S" />
        <input type="hidden" name="TENDER" value="C" />
        <input type="hidden" name="ORIGID" value="A70AA57838D6" />
        <input type="hidden" name="VERBOSITY" value="HIGH" />
        <input type="submit" value="Ref. Sale" />
      </form>
    </div>

    <div class = 'col-md-4'>
      <a href = "recurringbilling.php"><h1>Recurring Billing</h1></a>

    </div>

</div>

<p id = "text">

</p>

</div>
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
