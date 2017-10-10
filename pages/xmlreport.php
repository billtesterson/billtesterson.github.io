<?php
//Get Information request:
$getURL = $_REQUEST['URL'];
$getXMLRequest = $_REQUEST['XML'];

//$today = date("YmdHis");

//pass the headers
$headers[] = "Content-Type: application/xml";
//$headers[] = "X-VPS-CLIENT-TIMEOUT: 45";
//$headers[] = "X-VPS-REQUEST-ID:" . $today;
//$headers[] = "PAYPAL-NVP:";


//Create a curl connection
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $getURL);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $getXMLRequest);

$data = curl_exec($ch);
curl_close($ch);

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
  <div class = "container">

  <?php echo $data; ?>

</div>
  <script src = "../script.js"></script>
  </body>
  </html>
