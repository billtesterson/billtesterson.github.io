<?php
//1. Autoload the SDK Package. This will include all the files and classes to your autoloader
//Used for composer based installation
require __DIR__ . '/restSDK/vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'Af_OpabuECsNfU6AzLf1PT213b3BGAy6CRJa5IEr3hteYlOFobgeo0D9gTXxgH4l4UjyhJplVW2xaGVO', //client ID
    'EIcCShuD64_P_poFIfldFS9xj7t_wfKDTSzWCaOy8y8JUtsZ9A3pp9fcgPfWcqiUWw01BOPlz_6DWpUt'
    )
  );

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
