<html>

<head>
<title>Payflow Link Redesign Secure Token</title>
</head>

<body>
<br>RESULT = 0<br><br>RESPMSG = Approved<br><br>SECURETOKEN = 9zzSIL9KfmkSxdhAR08eh9AnD<br><br>SECURETOKENID = 2017929134453<br><br><p><a href="PFLRedesignSecureToken.txt">Logging</a></p>

</body>
</html>

<html>
<head>
<title>Post to Payflow Link with Tokens</title>
</head>

<body>

<!-- Pass information to Payflow Link Redesign -->
<form method="POST" action="https://pilot-payflowlink.paypal.com">
<br>
<hr width="50%" align="left">
<p><b>Continue to process with Secure Token</b></p>
<table border="0" width="250" height="30">
    <tr>
      <td width="200" height="30">SECURETOKEN:</td>
      <td width="200" height="30"><input type="text" value="9zzSIL9KfmkSxdhAR08eh9AnD" name="SECURETOKEN" size="40"></td>
    </tr>
    <tr>
      <td width="200" height="30">SECURETOKENID:</td>
      <td width="200" height="30"><input type="text" value="2017929134453" name="SECURETOKENID" size="30"></td>
    </tr>
    <tr>
      <td width="200" height="30">MODE:</td>
      <td width="200" height="30"><input type="text" value="TEST" name="MODE" size="10"></td>
    </tr>
    <tr>
      <td width="200" height="30">PARMLIST:</td>
      <td width="200" height="30"><input type="text" value="" name="PARMLIST" size="40"></td>
    </tr>
</table>
<p><input type="submit" value="Process Transaction"> </p>

</body>
</html>
