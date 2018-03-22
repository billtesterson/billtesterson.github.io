
<?php
/********************************************************** ***************PHP Assessment Version 1******************* *********************************************************/
$result = setResult();
$result_ar = setResultAr(7);
foreach($result_ar as $k => $v){
  if($k == $result){
    $result = $v;
  } //end if
  else {
  } //end else
}//end foreach
//start function setResult()
function setResult(){
  $result = 7;
  return $result;
} // end setResult
//start function setResultAr(int)
function setResultAr($x){
  $init_ar = array("ebay", "PayPal", "x.com", "GSI", "Magento", "Fetchback", "Where", "Milo");
  $tmp_ar = array();
  foreach($init_ar as $k => $v){
    if($k <= $x){
      $tmp_ar[$k] = $v;
    } //end if
  } //end foreach
  return $tmp_ar;
} // end setResultAr
?>

<?php if(isset($result)){
   echo $result;
 } else {
   echo "no result";
 }


 ?>    <!-- ************** Questions ************** --> <!-- 1. What is the current output when the page loads? --> <!-- --> <!-- 2. How would I change the above to output "Milo"? -->  <!---->
