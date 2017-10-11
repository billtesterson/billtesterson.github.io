<?php
//1. Autoload the SDK Package. This will include all the files and classes to your autoloader
//Used for composer based installation
require __DIR__ . '/restSDK/vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'Af_OpabuECsNfU6AzLf1PT213b3BGAy6CRJa5IEr3hteYlOFobgeo0D9gTXxgH4l4UjyhJplVW2xaGVO', //client ID
    'EIcCShuD64_P_poFIfldFS9xj7t_wfKDTSzWCaOy8y8JUtsZ9A3pp9fcgPfWcqiUWw01BOPlz_6DWpUt' //client secret
    )
  );

  $apiContext->setConfig(
    array(
      'log.LogEnabled' => true,
      'log.FileName' => 'PayPal.log',
      'log.LogLevel' => 'DEBUG'
    )
  );

  $creditCard = new \PayPal\Api\CreditCard(
    '{
      "type": "mastercard",
      "number": "5295157531999879",
      "expire_month": "10",
      "expire_year": "2025",
      "cvv2": "123",
      "first_name": "Harry",
      "last_name": "Potter"
    }'
  );
  //print number
  echo $creditCard->getType();

  $creditCard = new\PayPal\Api\CreditCard(
    array(
      "type" => "visa",
      "number" => "4417119669820331",
      "expire_month" => "11",
      "expire_year" => "2025",
      "cvv2" => "123",
      "first_name" => "Lord",
      "last_name" => "Voldemort"
    )
  );
  echo " " . $creditCard->getFirstName() . " " . $creditCard->getLastName();

  $creditCard = new \PayPal\Api\CreditCard();
  $creditCard->setType("visa")
             ->setNumber("4111111111111111")
             ->setExpireMonth("09")
             ->setExpireYear("2020")
             ->setCvv2("123")
             ->setFirstName("Bill")
             ->setLastName("Test");

  try {
    $creditCard->create($apiContext);
    echo $creditCard;
  }
  catch (\PayPal\Exception\PayPalConnectionException $ex) {
    //This will print detailed info on exception.
    //Helpful for debugging
    echo $ex->getData();
  }
//RUN php -f first.php on cmd for a test and create credit card in your vault
?>
