<?php
require __DIR__ . '/restSDK/vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'Af_OpabuECsNfU6AzLf1PT213b3BGAy6CRJa5IEr3hteYlOFobgeo0D9gTXxgH4l4UjyhJplVW2xaGVO', //client ID
    'EIcCShuD64_P_poFIfldFS9xj7t_wfKDTSzWCaOy8y8JUtsZ9A3pp9fcgPfWcqiUWw01BOPlz_6DWpUt' //client secret
    )
  );

  $type = $_REQUEST['cardType'];
  $number = $_REQUEST['cardnum'];
  $expire_month = $_REQUEST['month'];
  $expire_year = $_REQUEST['year'];
  $cvv2 = $_REQUEST['cvv2'];
  $first_name = $_REQUEST['first'];
  $last_name = $_REQUEST['last'];

  $creditCard = new \PayPal\Api\CreditCard();
  $creditCard->setType($type);
  $creditCard->setNumber($number);
  $creditCard->setExpireMonth($expire_month);
  $creditCard->setExpireYear($expire_year);
  $creditCard->setCvv2($cvv2);
  $creditCard->setFirstName($first_name);
  $creditCard->setLastName($last_name);


  try {
    $creditCard->create($apiContext);

  }
  catch (\PayPal\Exception\PayPalConnectionException $ex) {
    echo $ex->getData();
  }
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
  <a href = "expresscheck.php">back to ec</a>
  <div class = "container">
    <?php echo "<h1>Thank you, " . $creditCard->getFirstName() . " " . $creditCard->getLastName() . "!</h1><br />"; ?>
    <?php
    echo "<ul>
    <li>
    Card Number: " . $creditCard->getNumber() .
    "</li>
    <li>
    Type: " . $creditCard->getType() .
    "</li>
    <li>
    Expires: " . $creditCard->getExpireMonth() . $creditCard->getExpireYear() .
    "</li>" . "</ul>";

    echo $creditCard->getId();



    ?>
    <a href = "billAgreement.php"><h1>Set up Billing Agreement</h1></a>
  </div>


  <script src = "../script.js"></script>
  </body>
  </html>
