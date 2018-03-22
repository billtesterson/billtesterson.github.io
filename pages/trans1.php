<?php

$today = date("YmdHis");

$url = $_REQUEST['URL'];
$vendor = $_REQUEST['VENDOR'];
$user = $_REQUEST['USER'];
$partner = $_REQUEST['PARTNER'];
$pwd = $_REQUEST['PWD'];
$amt = $_REQUEST['AMT'];
$trxtype = $_REQUEST['TRXTYPE'];
$tender = $_REQUEST['TENDER'];
$token = $_REQUEST['CREATESECURETOKEN'];
$tokenid = $_REQUEST['SECURETOKENID'];
$silent = $_REQUEST['SILENTTRAN'];
$mode = $_REQUEST['MODE'];
$street = $_REQUEST['BILLTOSTREET'];
$zip = $_REQUEST['BILLTOZIP'];

$headers[] = "Content-Type: text/namevalue";
// Set the server timeout value to 45, but notice below in the cURL section, the timeout
// for cURL is set to 90 seconds.  Make sure the server timeout is less than the connection.
$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
$headers[] = "X-VPS-REQUEST-ID:" . $today;
$headers[] = "PAYPAL-NVP:";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

//turn off server and peer verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_POST, 1);

$token_request = "VENDOR=$vendor&USER=$user&PWD=$pwd&PARTNER=$partner&AMT=$amt&TRXTYPE=$trxtype&TENDER=$tender&CREATESECURETOKEN=$token&SECURETOKENID=$tokenid&SILENTTRAN=$silent&MODE=$mode&BILLTOSTREET=$street&BILLTOZIP=$zip";

curl_setopt($ch, CURLOPT_POSTFIELDS, $token_request);

$token_response = curl_exec($ch);
parse_str($token_response, $data);
$token = $data['SECURETOKEN'];
$token_id = $data['SECURETOKENID'];

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
  <a href = "payflow.php">back to payflow</a>
  <div class = 'container'>
    <p>
      <?php echo "Request: $token_request"; ?>
    </p>

    <p>
      <?php echo "Response: $token_response"; ?>
    </p>


    <br />
    <form method="post" action="https://pilot-payflowlink.paypal.com">
     <input type="text" name="SECURETOKEN" value = "<?php echo $token;?>"/><br />
     <input type="text" name="SECURETOKENID" value = "<?php echo $token_id;?>"/><br />
     <input type="text" name = "ACCT" value ="5555555555554444" /><br />
     <input type="text" name = "EXPDATE" value = "0920" /><br />
     <input type="text" name = "CSC" value = "123" /><br />
     <!--<input type="hidden" name="PARMLIST" value="ACCT=4111111111111111&EXPDATE=0725&CSC=123" />-->
     <input type = "submit" value = "submit" />
     </form>
  </div>


  <script src = "../jquery-3.2.1.min(1).js"></script>
  <script src = "../script.js"></script>
  </body>
  </html>
