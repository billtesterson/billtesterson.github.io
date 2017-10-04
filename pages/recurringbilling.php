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
  <a href = "../index.php">home</a>
  <a href = "payflow.php">payflow</a>
  <div class = "container">

    <div class = "row">
      <div class ="col-md-4 col-md-offset-4">
        <div class = "jumbotron">
          <h1>Recurring Billing</h1>
        </div>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <h1>Add</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <input type = "hidden" name="VENDOR" value="wpittmanpro" />
          <input type = "hidden" name="USER" value="wpittmanpro" />
          <input type = "hidden" name="PWD" value="Element7430" />
          <input type = "hidden" name="PARTNER" value="paypal" />
          <input type = "hidden" name = "TRXTYPE" value = "R"/>
          <input type = "hidden" name = "TENDER" value = "C"/>
          <input type = "hidden" name = "ACTION" value = "A"/>
          <input type = "hidden" name = "PROFILENAME" value = "testAdd1"/>
          <input type = "hidden" name = "ACCT" value = "4111111111111111" />
          <input type = "hidden" name = "EXPDATE" value = "0920" />
          <input type = "hidden" name = "AMT" value = "20.00" />
          <input type = "hidden" name = "START" value = "10052017" />
          <input type = "hidden" name = "TERM" value = "365" />
          <input type = "hidden" name = "PAYPERIOD" value = "DAYS" />
          <input type = "hidden" name = "OPTIONALTRX" value = "S" /> <!--optional-->
          <input type = "hidden" name = "OPTIONALTRXAMT" value = "10.00" /><!--optional-->
          <input type = "submit" value = "Add RB" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Modify</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <input type = "hidden" name="VENDOR" value="wpittmanpro" />
          <input type = "hidden" name="USER" value="wpittmanpro" />
          <input type = "hidden" name="PWD" value="Element7430" />
          <input type = "hidden" name="PARTNER" value="paypal" />
          <input type = "hidden" name = "TRXTYPE" value = "R"/>
          <input type = "hidden" name = "TENDER" value = "C" />
          <input type = "hidden" name = "ACTION" value = "M" />
          <input type = "hidden" name = "ORIGPROFILEID" value = "RT0000000004" />
          <input type = "hidden" name = "AMT" value = "15.00" /> <!--anything to modify this line and below-->
          <input type = "submit" value = "Modify RB" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Inquiry N</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <input type = "hidden" name = "VENDOR" value="wpittmanpro" />
          <input type = "hidden" name = "USER" value="wpittmanpro" />
          <input type = "hidden" name = "PWD" value="Element7430" />
          <input type = "hidden" name = "PARTNER" value="paypal" />
          <input type = "hidden" name = "TRXTYPE" value = "R"/>
          <input type = "hidden" name = "ACTION" value = "I" />
          <input type = "hidden" name = "ORIGPROFILEID" value = "RT0000000005" />
          <input type = "hidden" name = "PAYMENTHISTORY" value = "N" />
          <input type = "submit" value = "PAYMENTHISTORY=N" />
        </form>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <h1>Inquiry Y</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <input type = "hidden" name = "VENDOR" value="wpittmanpro" />
          <input type = "hidden" name = "USER" value="wpittmanpro" />
          <input type = "hidden" name = "PWD" value="Element7430" />
          <input type = "hidden" name = "PARTNER" value="paypal" />
          <input type = "hidden" name = "TRXTYPE" value = "R"/>
          <input type = "hidden" name = "ACTION" value = "I" />
          <input type = "hidden" name = "ORIGPROFILEID" value = "RT0000000004" />
          <input type = "hidden" name = "PAYMENTHISTORY" value = "Y" />
          <input type = "submit" value = "PAYMENTHISTORY=Y" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Cancel RB</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <input type = "hidden" name = "VENDOR" value="wpittmanpro" />
          <input type = "hidden" name = "USER" value="wpittmanpro" />
          <input type = "hidden" name = "PWD" value="Element7430" />
          <input type = "hidden" name = "PARTNER" value="paypal" />
          <input type = "hidden" name = "TRXTYPE" value = "R"/>
          <input type = "hidden" name = "ACTION" value = "C" />
          <input type = "hidden" name = "ORIGPROFILEID" value = "RT0000000003" />
          <input type = "submit" value = "Cancel RB" />
        </form>
      </div>



    </div>

  </div>

<script src = "../script.js"></script>
</body>
</html>
