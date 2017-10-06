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
  <a href = "payflow.php">back to payflow</a>
  <div class = "container">
    <div class = "row">
      <div class ="col-md-4 col-md-offset-4">
        <div class = "jumbotron">
          <h1>ACH</h1>
        </div>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <h1>Debit/Sale</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ACCTTYPE" value = "C" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "hidden" name = "AMT" value = "1012" />
          <input type = "hidden" name = "AUTHTYPE" value = "PPD" />
          <input type = "hidden" name = "FIRSTNAME" value = "Mike" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "submit" value = "Debit/Sale" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Credit</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TRXTYPE" value = "C" />
          <input type = "hidden" name = "ORIGID" value = "A1ADA7257157" />
          <input type = "submit" value = "credit" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>POP Debit/Sale</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ACCTTYPE" value = "C" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "hidden" name = "CHKNUM" value = "123" />
          <input type = "hidden" name = "AMT" value = "100" />
          <input type = "hidden" name = "AUTHTYPE" value = "POP" />
          <input type = "hidden" name = "FIRSTNAME" value = "Frodo" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "hidden" name = "DESC" value = "POPexample" />
          <input type = "submit" value = "POP" />
        </form>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <h1>RCK Debit/Sale</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ACCTTYPE" value = "C" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "hidden" name = "CHKNUM" value = "123" />
          <input type = "hidden" name = "AMT" value = "100" />
          <input type = "hidden" name = "AUTHTYPE" value = "RCK" />
          <input type = "hidden" name = "FIRSTNAME" value = "Samwise" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "hidden" name = "DESC" value = "RCKexample" />
          <input type = "submit" value = "POP" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>ARC Debit/Sale</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ACCTTYPE" value = "C" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "hidden" name = "CHKNUM" value = "123" />
          <input type = "hidden" name = "AMT" value = "100" />
          <input type = "hidden" name = "AUTHTYPE" value = "ARC" />
          <input type = "hidden" name = "FIRSTNAME" value = "Gandalf" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "hidden" name = "DESC" value = "ARCexample" />
          <input type = "submit" value = "ARC" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>WEB Debit/Sale</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ACCTTYPE" value = "C" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "hidden" name = "AMT" value = "100" />
          <input type = "hidden" name = "AUTHTYPE" value = "WEB" />
          <input type = "hidden" name = "FIRSTNAME" value = "Aragorn" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "hidden" name = "DESC" value = "RCKexample" />
          <input type = "submit" value = "WEB" />
        </form>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <h1>WEB Credit</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TRXTYPE" value = "C" />
          <input type = "hidden" name = "ORIGID" value = "A7ADA58D9111" />
          <input type = "hidden" name = "AUTHTYPE" value = "WEB" />
          <input type = "submit" value = "credit WEB" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Inquiry</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TRXTYPE" value = "I" />
          <input type = "hidden" name = "ORIGID" value = "A1ADA7257157" />
          <input type = "submit" value = "inquire" />
        </form>
      </div>

      <div class = "col-md-4">
        <h1>Void</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TRXTYPE" value = "V" />
          <input type = "hidden" name = "ORIGID" value = "A1ADA7257C1F" />
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "submit" value = "void" />
        </form>

      </div>
    </div>

    <div class = "row">
      <div class = "col-md-4">
        <h1>Prenote</h1>
        <form method="POST" action="https://pilot-payflowpro.paypal.com">
          <!-- The following fields are required: -->
          <input type = "hidden" name = "VENDOR" value = "wpittmanpro"/>
          <input type = "hidden" name = "USER" value = "wpittmanpro" />
          <input type = "hidden" name = "PWD" value = "Element7430" />
          <input type = "hidden" name = "PARTNER" value = "paypal">
          <input type = "hidden" name = "TENDER" value = "A" />
          <input type = "hidden" name = "ACCTTYPE" value = "C" />
          <input type = "hidden" name = "ABA" value = "111111118" />
          <input type = "hidden" name = "ACCT" value = "1111111111" />
          <input type = "hidden" name = "AMT" value = "0.00" />
          <input type = "hidden" name = "AUTHTYPE" value = "PPD" />
          <input type = "hidden" name = "FIRSTNAME" value = "Aragorn" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "hidden" name = "PRENOTE" value = "Y" />
          <input type = "hidden" name = "DESC" value = "RCKexample" />
          <input type = "submit" value = "Prenote" />
      </div>
    </div>

  </div>
<!--<input type = "hidden" name = "" value = "" />-->
  <script src = "../jquery-3.2.1.min(1).js"></script>
  <script src = "../script.js"></script>
  </body>
  </html>
