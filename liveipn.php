<?php

// change email from xxx@xxxx.com to a valid one.

// read the post from PayPal system and add 'cmd'
if($_SERVER['REQUEST_METHOD']!="POST") die("No data");
$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}

// post back to PayPal system to validate
$url=(!isset($_POST['test_ipn'])) ? "'https://www.paypal.com/cgi-bin/webscr' : 'https://www.sandbox.paypal.com/cgi-bin/webscr';"

    $curl_result=$curl_err='';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "Content-Length: " . strlen($req)));
    curl_setopt($ch, CURLOPT_HEADER , 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $curl_result = @curl_exec($ch);
    $curl_err = curl_error($ch);
    curl_close($ch);

//are we verified? If so, let's process the IPN
if (strpos($curl_result, "VERIFIED")!==false)
{
//do your IPN stuff here
$mail_From = "From: IPN@domain.com";  // enter an email address alias here example ipn@fiercepc.co.uk please note this does not need to be a real email address
$mail_To = "email@domain.com";  //enter the email address you want to receive the email at
$mail_Subject = "VERIFIED IPN";
$mail_Body = $req;

foreach ($_POST as $key => $value){
$emailtext .= $key . " = " .$value ."\r\n\r\n";
}

mail($mail_To, $mail_Subject, $emailtext . "\r\n\r\n" . $mail_Body, $mail_From);
}
else{
$mail_From = "From: IPN@domain.com";
$mail_To = "email@domain.com";
$mail_Subject = "INVALID IPN";
$mail_Body = $req;

$emailtext = "you didn't get anything";
mail($mail_To, $mail_Subject, $emailtext . "\r\n\r\n" . $mail_Body, $mail_From);
}

?>
