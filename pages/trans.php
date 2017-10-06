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
    <div class = "row">
      <div class ="col-md-4 col-md-offset-4">
        <div class = "jumbotron">
          <h1>Trans</h1>
          <h2>Redirect</h2>
        </div>
      </div>
    </div>

    <?php
    $id = rand();
    ?>

    <div class = "row">
      <div class = "col-md-4">
        <h1>Try</h1>
        <form method = "POST" action = "trans1.php">
          <input type = "hidden" name = "URL" value = "https://pilot-payflowpro.paypal.com" />
          <input type="hidden" name="VENDOR" value="wpittmanpro" />
          <input type="hidden" name="USER" value="wpittmanpro" />
          <input type="hidden" name="PWD" value="Element7430" />
          <input type="hidden" name="PARTNER" value="paypal" />
          <input type = "hidden" name = "TRXTYPE" value = "S" />
          <input type = "hidden" name = "AMT" value = "200" />
          <input type = "hidden" name = "CREATESECURETOKEN" value = "Y" />
          <input type = "hidden" name = "SECURETOKENID" value = "<?php echo $id;?>" />
          <input type = "hidden" name = "SILENTTRAN" value = "TRUE" />
          <input type = "submit" value = "submit" />
        </form>
      </div>


    </div>

  </div>

  <script src = "../jquery-3.2.1.min(1).js"></script>
  <script src = "../script.js"></script>
  </body>
  </html>
