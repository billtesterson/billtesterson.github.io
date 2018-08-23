<?php
$id = rand();
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <script>
  $(function(){
    $('#header').load('../nav.html');
  });
  </script>
  <div id = "header"></div>
<div class ="container">
<a href = "try.html">TRY</a>
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
<input type="hidden" name="TEMPLATE" value = "MOBILE" />
<input type="submit" value="Click here to Purchase">
</form>

</div>
<div class = "col-md-4">

<h1>Token</h1>

<form method="POST" action="token.php">
  <!-- The following fields are required: -->
  <input type = "hidden" name = "URL" value = "https://pilot-payflowpro.paypal.com" />
  <!--<input type="hidden" name="VENDOR" value="ztestpayflowpro"/> <_____ BT account
  <input type="hidden" name="USER" value="btuser1" />
  <input type ="hidden" name ="PWD" value = "Mtspassword1" />-->
  <input type="hidden" name="VENDOR" value="wpittman" />
  <input type="hidden" name="USER" value="wpittman" />
  <input type="hidden" name="PWD" value="Element7430" />
  <input type="hidden" name="PARTNER" value="paypal" />
  <input type="hidden" name="AMT" value="10">
  <input type = "hidden" name = "TENDER" value = "P" />
  <input type="hidden" name="TRXTYPE" value="S">
  <!-- See “Payflow Link Transaction Types” on page63for the list of valid transaction types. -->
  <!-- The following fields are optional you can choose these or others: -->
 <input type="hidden" name="CREATESECURETOKEN" value = "Y" />
  <input type = "hidden" name = "SECURETOKENID" value = "<?php echo $id; ?>"/>

  <input type = "submit" value = "click here for token" />
</form>

</div>
<div class = "col-md-4">
  <a href = "trans.php"><h1>Transparent Redirect</h1></a>
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
      <input type="hidden" name='AMT' value="10" />
      <input type="hidden" name="TRXTYPE" value="D" />
      <input type="hidden" name="ORIGID" value="A10AA91EA797" />
      <input type="hidden" name="CAPTURECOMPLETE" value="Y"
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
    <form method="POST" action="inquiry.php">
      <input type="hidden" name="VENDOR" value="wpittmanpro" />
      <input type="hidden" name="USER" value="wpittmanpro" />
      <input type="hidden" name="PWD" value="Element7430" />
      <input type="hidden" name="PARTNER" value="paypal" />
      <input type="hidden" name="TRXTYPE" value ="I" />
      <input type="hidden" name="TENDER" value="C" />
      <input type="text" name="ORIGID" value="A70AA76D076C"  />
      <input type="hidden" name="VERBOSITY" value = "HIGH" />
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

<div class = "row">
  <div class = "col-md-4">
    <a href = "fps.php"><h1>FPS</h1></a>
  </div>

  <div class = "col-md-4">
    <a href = "ach.php"><h1>ACH</h1></a>
  </div>

  <div class = "col-md-4">
    <a href = "report.php"><h1>XML Report</h1></a>
  </div>



</div>

<div class = "row">
  <div class = "col-md-4">
    <h1>String test</h1>
    <form method="POST" action="passStringSale.php">
      <br /><br />
      <div align="center">
        <table border="0" width="350" height="30">
        <tr>
          <td width="200" height="30">Host URL: </td>
          <td width="200" height="30"><input type="text" value="https://pilot-payflowpro.paypal.com" name="GHostURL" size="35"></td>
        </tr>
        <tr>
          <td width="200">PAYPAL-NVP:</font></b></td>
          <td width="200"><SELECT NAME="passPaypalNVP">
    		<OPTION VALUE="0">No</option>
    		<OPTION VALUE="1">Yes</option>
             </SELECT>
          </td>
        </tr>
      </table>

      <p><textarea name="strBody" cols="80" rows="10">

    </textarea></p>
      </div><p><input type="submit" value="Process" name="B1"></p>
    </form>
  </div>

<div class = "col-md-4">
  <a href = "payflowec.php"><h1>EC</h1></a>
</div>

<div class = "col-md-4">
  <a href = "recurringBilling.php"><h1>Recurring Billing Profile</h1></a>
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



<script src = "../script.js"></script>
</body>
</html>
