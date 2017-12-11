<?php
// id = Af_OpabuECsNfU6AzLf1PT213b3BGAy6CRJa5IEr3hteYlOFobgeo0D9gTXxgH4l4UjyhJplVW2xaGVO
//secret = EIcCShuD64_P_poFIfldFS9xj7t_wfKDTSzWCaOy8y8JUtsZ9A3pp9fcgPfWcqiUWw01BOPlz_6DWpUt

$headers[] = "Accept: application/json";
$headers[] = "Accept-Language: en-US";
$bearer = "Af_OpabuECsNfU6AzLf1PT213b3BGAy6CRJa5IEr3hteYlOFobgeo0D9gTXxgH4l4UjyhJplVW2xaGVO:EIcCShuD64_P_poFIfldFS9xj7t_wfKDTSzWCaOy8y8JUtsZ9A3pp9fcgPfWcqiUWw01BOPlz_6DWpUt";
$headers[] = "grant_type=client_credentials";
$url = "https://api.sandbox.paypal.com/v1/oauth2/token";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_VERBOSE, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 90);
curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, $bearer);

$response = curl_exec($ch);
echo $response;
?>
