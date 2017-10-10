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
  <script language = javascript>
  window.onload = function(){

    var dateTime = new Date();
    var calMonth = dateTime.getMonth() + 1;
    var currentMonth = ('0' + calMonth).slice(-2);
    var Year = dateTime.getFullYear();

    var Day = new Date();
    var getDay = Day.getDate() - 1;
    var calRPStartDate = Year + '-' + currentMonth + '-' + getDay;

    var textareaValue = $('#XML').value;
    textareaValue = textareaValue.replace("displayExpDate", calRPStartDate);
    $('#XML').value = textareaValue;
  }
  </script>
</head>
<body>
  <script>
  $(function(){
    $('#header').load('../nav.html');
  });
  </script>
  <div id = "header"></div>
  <a href = "payflow.php">back to payflow</a>
  <div class = "container">

    <div id = "info">


    </div>

    <form action = "xmlreport.php" method = "post">
      <input type = "hidden" name = "URL" value = 'https://payments-reports.paypal.com/test-reportingengine' />
      <textarea name = "XML" id ="XML" cols = "80" rows = "20">
        <?xml version="1.0" encoding="UTF-8"?>
<reportingEngineRequest>
  <authRequest>
   <user>wpittmanpro</user>
   <vendor>wpittmanpro</vendor>
   <partner>paypal</partner>
   <password>Element7430</password>
  </authRequest>
  <runReportRequest>
   <reportName>DailyActivityReport</reportName>
    <reportParam>
      <paramName>report_date</paramName>
      <paramValue>displayExpDate</paramValue>
    </reportParam>
    <pageSize>50</pageSize>
  </runReportRequest>
</reportingEngineRequest>
      </textarea>
      <input type = "submit" value = "GO" />
    </form>

  </div>



  <script src = "../script.js"></script>
  </body>
  </html>
