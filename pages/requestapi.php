<!-- V4Client HTTPS Integration Example                                  -->
<!--                                                                     -->

<script language=javascript>
  window.onload = function(){

  var DateTime = new Date();
  var Year = DateTime.getFullYear();
  var Month = DateTime.getMonth() + 1;
  var Day = new Date();
  var getDay = Day.getDate() + 1;
                var currentDay = ('0' + getDay).slice(-2);
  var hours = DateTime.getHours();
  var minutes = DateTime.getMinutes();
  var seconds = DateTime.getSeconds();
  var calDateTime = Year + "" + Month + "" + currentDay + "" + hours + "" +  minutes + seconds;
  document.Form1.ReqID.value = calDateTime;


  }

function typeCredentials(Credentials,value)
{

    if(value < "1")
    {
    document.getElementById("Login").style.display="none";
    }

    if(value == "1")
    {
    document.getElementById("Login").style.display="block";
    }
}


</script>
</head>

<body>

<form method="POST" action="SecureTokenEx.asp" name="Form1">
  <div align="left">
<table border="0" width="400" height="30">
    <tr>
      <td width="200" height="30">Host URL: </td>
      <td width="200" height="30"><input type="text" value="https://pilot-payflowpro.paypal.com" name="GHostURL" size="35"></td>
    </tr>
                                <tr>
      <td width="200" height="30">Payflow link URL: </td>
      <td width="200" height="30"><input type="text" value="https://pilot-payflowlink.paypal.com" name="PFLGHostURL" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Credentials: </td>
     <td width="200" height="35"><SELECT NAME="Credentials" onChange="typeCredentials(Credentials,this.options[selectedIndex].value);">
                                        <OPTION VALUE="0">mcgovernrtRedesign</option>
                                                                                <OPTION VALUE="1">my acct</option>
                                                                  </SELECT>
      </td>
   </tr>
</table>

<div id='Login' style='display: none;'>
<table border="0" width="400" height="30">
    <tr>
      <td width="200" height="30">Partner:</td>
      <td width="200" height="30"><input type="text" value="" name="partnerID" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Vendor:</td>
      <td width="200" height="30"><input type="text" value="" name="vendorID" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">User:</td>
      <td width="200" height="30"><input type="text" value="" name="userID" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Password:</td>
      <td width="200" height="30"><input type="text" value="" name="passwd" size="35"></td>
    </tr>
</table>
</div>

<table border="0" width="400" height="30">
    <tr>
      <td width="200" height="30">Request ID:</td>
      <td width="200" height="30"><input type="text" value="" name="ReqID" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Amount:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="1.00" name="TotalAmount" size="6"></td>
    </tr>
    <tr>
      <td width="200">Trans Type:</font></b></td>
      <td width="200"><SELECT NAME="TransactType">
                                <OPTION VALUE="A">Authorization</option>
                                <OPTION VALUE="S">Sale</option>
         </SELECT>
      </td>
    </tr>
      <td width="200">Method:</font></b></td>
      <td width="200" height="30"><SELECT NAME="MethodType">
                                                                                <OPTION VALUE="">
                                                                                <OPTION VALUE="C">CC - Credit Card
                                        <OPTION VALUE="P">P - PayPal
                                        <OPTION VALUE="ECHECK">ECHECK - Check
                                                                </SELECT></td></tr>
</table>

<br>
<hr align="left" width="50%">
<p><b>Bill to Address Information</b></p>
<table border="0" width="400" height="30">
    <tr>
      <td width="200" height="30">First Name:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="Crash" name="NFirstName" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Last Name:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="OverRide" name="NLastName" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Email Address:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="rabbit@paypal.com" name="EmailAddress" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Street:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="123 Main St" name="BillStreet" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">City:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="CyberCity" name="BillCity" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">State:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="CA" name="BillState" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Zip:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="21345" name="BillZip" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Country:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="US" name="BillCountry" size="35"></td>
    </tr>
</table>

<br>
<hr align="left" width="50%">
<p><b>Miscellanous</b></p>
<table border="0" width="400" height="30">
    <tr>
      <td width="200" height="30">Comment 1:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="PayPal-Tech" name="MComment1" size="35"></td>
    </tr>
    <tr>
      <td width="200" height="30">Comment2:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="Testing" name="MComment2" size="35"></td>
    </tr>
    <tr>
      <td width="200">Verbosity:</font></b></td>
      <td width="200"><SELECT NAME="VerbosityLevel">
                                <OPTION VALUE="HIGH">HIGH</option>
                                <OPTION VALUE="MEDIUM">MEDIUM</option>
                                <OPTION VALUE="LOW">LOW</option>
         </SELECT>
      </td>
    </tr>
    <tr>
      <td width="200" height="30">Button Source:&nbsp; </td>
      <td width="200" height="30"><input type="text" value="BobsTestPage" name="buttonsource" size="35"></td>
    </tr>
  </table>
  </div><p><input type="submit" value="Process" name="B1"></p>
</form>
</body>
</html>
