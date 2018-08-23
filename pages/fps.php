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
  <a href = 'payflow.php'>back to payflow</a>
  <div class = "row">
    <div class ="col-md-4 col-md-offset-4">
      <div class = "jumbotron">
        <h1>FPS</h1>
      </div>
    </div>
  </div>
<div class = "container">

  <div class = "row">
    <div class = "col-md-4">
      <h1>CSC Fail</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro4"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro4" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value = "paypal">
        <input type = "hidden" name = "AMT" value = "10">
        <input type = "hidden" name = "TENDER" value = "C" />
        <input type = "hidden" name = "TRXTYPE" value = "S">
        <input type = "hidden" name = "ACCT" value = "4111111111111111" />
        <input type = "hidden" name = "EXPDATE" value = "0924" />
        <input type = "hidden" name = "CVV2" value = "301-600" />
        <input type = "hidden" name = "VERBOSITY" value = "HIGH" />
        <input type = "submit" value = "Fail" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>CSC Approve</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro4"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro4" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A10AA7215A98" />
        <input type = "hidden" name = "UPDATEACTION" value = "APPROVE" />
        <input type = "submit" value = "approve" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>CSC Decline</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type="hidden" name="VENDOR" value="wpittmanpro4"/>
        <input type="hidden" name="USER" value="wpittmanpro4" />
        <input type ="hidden" name ="PWD" value = "Element7430" />
        <input type="hidden" name="PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A70AA5891985" />
        <input type = "hidden" name = "UPDATEACTION" value = "FPS_MERCHANT_DECLINE" />
        <input type = "submit" value = "decline" />
      </form>
    </div>
  </div>



  <div class = "row">
    <div class = "col-md-4">
      <h1>AVS Fail</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro2"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro2" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value = "paypal">
        <input type = "hidden" name = "AMT" value = "10">
        <input type = "hidden" name = "TENDER" value = "C" />
        <input type = "hidden" name = "TRXTYPE" value = "S">
        <input type = "hidden" name = "ACCT" value = "4111111111111111" />
        <input type = "hidden" name = "EXPDATE" value = "0924" />
        <input type = "hidden" name = "CVV2" value = "123" />
        <input type = "hidden" name = "BILLTOSTREET" value = "xuiip" />
        <input type = "hidden" name = "BILLTOZIP" value = "8888" />
        <input type = "hidden" name = "VERBOSITY" value = "HIGH" />
        <input type = "submit" value = "Fail" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>AVS Approve</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro2"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro2" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A70AA5893724" />
        <input type = "hidden" name = "UPDATEACTION" value = "APPROVE" />
        <input type = "submit" value = "approve" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>AVS Decline</h1>
      <form method="POST" action="fpsDecline.php">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro4"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro4" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "A" />
        <input type = "hidden" name ="AMT" value = "10.00" />
        <input type = "hidden" name ="TENDER" value = "C" />
        <input type = "hidden" name ="ACCT" value = "4493483676008182" />
        <input type ="hidden" name = "CUSTIP" value = "10.248.136.194" />
        <input type = "hidden" name = "EXPDATE" value = "0923" />

      <!--  <input type = "hidden" name = "ORIGID" value = "" />-->
        <input type = "hidden" name = "UPDATEACTION" value = "FPS_MERCHANT_DECLINE" />
        <input type = "submit" value = "Decline" />
      </form>
    </div>
  </div>

  <div class = "row">
    <div class = "col-md-4">
      <h1>CSC/AVS Fail</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro5"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro5" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value = "paypal">
        <input type = "hidden" name = "AMT" value = "10">
        <input type = "hidden" name = "TENDER" value = "C" />
        <input type = "hidden" name = "TRXTYPE" value = "S">
        <input type = "hidden" name = "ACCT" value = "4111111111111111" />
        <input type = "hidden" name = "EXPDATE" value = "0924" />
        <input type = "hidden" name = "CVV2" value = "301-600" /> <!--fail-->
        <input type = "hidden" name = "BILLTOSTREET" value = "123" /><!--fail-->
        <input type = "hidden" name = "BILLTOZIP" value = "68144" /><!--fail-->
        <input type = "hidden" name = "VERBOSITY" value = "HIGH" />
        <input type = "submit" value = "Fail" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>CSC/AVS approve</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro5"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro5" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A10AA7214BB7" />
        <input type = "hidden" name = "UPDATEACTION" value = "APPROVE" />
        <input type = "submit" value = "approve" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>CSC/AVS decline</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro5"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro5" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A70AA5893ED3" />
        <input type = "hidden" name = "UPDATEACTION" value = "FPS_MERCHANT_DECLINE" />
        <input type = "submit" value = "decline" />
      </form>
    </div>
  </div>

  <div class = "row">
    <div class = "col-md-4">
      <h1>IP fail</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro3"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro3" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value = "paypal">
        <input type = "hidden" name = "AMT" value = "10">
        <input type = "hidden" name = "TENDER" value = "C" />
        <input type = "hidden" name = "TRXTYPE" value = "S">
        <input type = "hidden" name = "ACCT" value = "4111111111111111" />
        <input type = "hidden" name = "EXPDATE" value = "0924" />
        <input type = "hidden" name = "CUSTIP" value = "111.111.11.111" /><!--194.213.32.220-->
        <input type = "hidden" name = "VERBOSITY" value = "HIGH" />
        <input type = "submit" value = "Fail" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>IP approve</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro3"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro3" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A10AA7215505" />
        <input type = "hidden" name = "UPDATEACTION" value = "APPROVE" />
        <input type = "submit" value = "approve" />
      </form>
    </div>

    <div class = "col-md-4">
      <h1>IP decline</h1>
      <form method="POST" action="https://pilot-payflowpro.paypal.com">
        <!-- The following fields are required: -->
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro3"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro3" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "U" />
        <input type = "hidden" name = "ORIGID" value = "A10AA7215505" />
        <input type = "hidden" name = "UPDATEACTION" value = "FPS_MERCHANT_DECLINE" />
        <input type = "submit" value = "decline" />
      </form>
    </div>
  </div>

  <div class = "row">
    <div class = "col-md-4">
      <h1>USPS address validation</h1>
      <form method = "POST" action = "fps2.php">
        <input type = "hidden" name = "VENDOR" value = "wpittmanpro4"/>
        <input type = "hidden" name = "USER" value = "wpittmanpro4" />
        <input type = "hidden" name = "PWD" value = "Element7430" />
        <input type = "hidden" name = "PARTNER" value="paypal">
        <input type = "hidden" name = "TRXTYPE" value = "S" />
        <input type = "hidden" name = "TENDER" value = "C" />
        <input type = "hidden" name = "AMT" value = "10.00" />
        <input type = "text" name = "BILLTOFIRSTNAME" placeholder = "BILLTOFIRSTNAME" />
        <input type = "text" name = "BILLTOLASTNAME" placeholder="BILLTOLASTNAME" />
        <input type = "text" name = "BILLTOSTREET" placeholder = "BILLTOSTREET" />
        <input type = "text" name = "BILLTOCITY" placeholder = "BILLTOCITY" />
        <input type = "text" name = "BILLTOSTATE" placeholder = "BILLTOSTATE" />
        <input type = "text" name = "BILLTOZIP" placeholder = "BILLTOZIP" />
        <input type = "text" name = "BILLTOCOUNTRY" placeholder = "BILLTOCOUNTRY" />
        <input type = "hidden" name = "ECHODATA" value = "address" />
        <input type = "text" name = "ACCT" placeholder = "ACCT" />
        <input type = "text" name = "EXPDATE" placeholder = "EXPDATE MMYY" />
        <input type = "text" name = "CVV2" placeholder = "CVV2" />
        <input type = "submit" />
      </form>
    </div>
  </div>

</div><!--container-->


  <script src = "../jquery-3.2.1.min(1).js"></script>
  <script src = "../script.js"></script>
  </body>
  </html>
