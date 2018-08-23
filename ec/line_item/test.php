<?php

/*
Here is an example:
PAYMENTREQUEST_0_AMT=524.20                     // Total
PAYMENTREQUEST_0_ITEMAMT=458.00                 // item * quantity + other items * quantity = ITEMAMT
PAYMENTREQUEST_0_SHIPPINGAMT=20.00              // shipping total
PAYMENTREQUEST_0_TAXAMT=46.20                   // tax total
L_PAYMENTREQUEST_0_NAME0=Books
L_PAYMENTREQUEST_0_AMT0=154.00                  // 154.00 * 2 = 308.00
L_PAYMENTREQUEST_0_QTY0=2
L_PAYMENTREQUEST_0_NAME1=CDs
L_PAYMENTREQUEST_0_AMT1=50.00                   // 50.00 * 3 = 150.00
L_PAYMENTREQUEST_0_QTY1=3
                                308.00 + 150.00 =  458.00 (same as ITEMAMT)
                                          20.00 // shipping
                                          46.20 // tax
                                         524.20 // AMT
*/

/*
PAYMENTREQUEST_0_AMT=100.00   //total
PAYMENTREQUEST_0_ITEMAMT=70.00 // item * quantity + other items =ITEMAMT
PAYMENTREQUEST_0_SHIPPINGAMT=20.00
PAYMENTREQUEST_0_TAXAMT=10.00
L_PAYMENTREQUEST_0_NAME0=Books
L_PAYMENTREQUEST_0_AMT0=20
L_PAYMENTREQUEST_0_QTY0=2       /20 * 2 = 40
L_PAYMENTREQUEST_0_NAME1=CD
L_PAYMENTREQUEST_0_AMT1=15
L_PAYMENTREQUEST_0_QTY1=2      //15 * 2 = 30
*/

$str = file_get_contents('text.txt');
$str = preg_replace('/\s+/', '', $str);

$line_items = array('PAYMENTREQUEST_0_AMT'=>'100.00',
                    'PAYMENTREQUEST_0_ITEMAMT'=>'70.00',
                    'PAYMENTREQUEST_0_SHIPPINGAMT'=>'20.00',
                    'PAYMENTREQUEST_0_TAXAMT'=>'10.00',
                    'L_PAYMENTREQUEST_0_NAME0'=>'BOOKS',
                    'L_PAYMENTREQUEST_0_AMT0'=>'20.00',
                    'L_PAYMENTREQUEST_0_QTY0'=>'2',
                    'L_PAYMENTREQUEST_0_NAME1'=>'CD',
                    'L_PAYMENTREQUEST_0_AMT1'=>'15',
                    'L_PAYMENTREQUEST_0_QTY1'=>'2'
);

/*foreach($line_items as $k => $v) {
  $str = $k . '=' . $v . '&';
  echo $str;
}*/

//$str = substr($str, 0, -1);
$user = "wpittman_api1.paypal.com";
$pwd = "C7CM265TPAMF2LM7";
$sig = "AFcWxV21C7fd0v3bYYYRCpSSRl31AART2vD.JQ4wJAUVJrAyxLH3IrN3";
$method = "SetExpressCheckout";
$version = "204.0";
$return_url = "http://10.248.136.194:80/training/ec/line_item/index.php";
$cancel_url = "http://10.248.136.194:80/training/ec/line_item/index.php";
$action = "Sale";
$amt = "100.00";
$request = "USER=$user&PWD=$pwd&SIGNATURE=$sig&METHOD=$method&VERSION=$version&RETURNURL=$return_url&CANCELURL=$cancel_url&PAYMENTREQUEST_0_PAYMENTACTION=$action&PAYMENTREQUEST_0_AMT=$amt";
$request .= "PAYMENTREQUEST_0_ITEMAMT=70.00&";
$request .= "PAYMENTREQUEST_0_SHIPPINGAMT=20.00&";
$request .= "PAYMENTREQUEST_0_TAXAMT=10.00&";
$request .= "L_PAYMENTREQUEST_0_NAME0=BOOKS&";
$request .= "L_PAYMENTREQUEST_0_AMT0=20.00&";
$request .= "L_PAYMENTREQUEST_0_QTY0=2&";
$request .= "L_PAYMENTREQUEST_0_NAME1=CD&";
$request .= "L_PAYMENTREQUEST_0_AMT1=15.00&";
$request .= "L_PAYMENTREQUEST_0_QTY1=2&";
$request .= "$str";

$request = explode("&", $request);
foreach($request as $data) {
  echo $data . '<br />';
}

?>
<html>
<head>

</head>
<body>
  <h1>Test</h1>
</body>
</html>
