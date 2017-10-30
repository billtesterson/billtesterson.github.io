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
        <h1>PayPal Pro</h1>
      </div>
    </div>
  </div>

  <div class = "row">
    <div class = 'col-md-4 col-md-offset-4'>
      <div class="creditCardForm">
      <div class="heading">
          <h1>DoDirectPayment(auth)</h1>
      </div>
      <div class="payment">
          <form method = "post" action = "dodirect.php">
            <input type = "hidden" name = "url" value = "https://api-3t.sandbox.paypal.com/nvp" />
            <input type = "hidden" name = "VERSION" value = "58.0" />
              <div class="form-group owner">
                  <label for="owner">First Name</label>
                  <input type="text" name = "first" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">Last Name</label>
                  <input type="text" name = "last" class="form-control" id="owner">
              </div>
              <div class="form-group CVV">
                  <label for="cvv">CVV</label>
                  <input type="text" name = "cvv2" class="form-control" id="cvv">
              </div>
              <div class="form-group" id="card-number-field">
                  <label for="cardNumber">Card Number</label>
                  <input type="text" name = "cardnum" class="form-control" id="cardNumber">
              </div>
              <h3>Address</h3><br />
              <div class="form-group owner">
                  <label for="owner">Street</label>
                  <input type="text" name = "STREET" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">City</label>
                  <input type="text" name = "CITY" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">State</label>
                  <input type="text" name = "STATE" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">Zip</label>
                  <input type="text" name = "Zip" class="form-control" id="owner">
              </div>
              <div class="form-group" id="expiration-date">
                  <label>Expiration Date</label>
                  <select name = "month">
                      <option value="01">January</option>
                      <option value="02">February </option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                  </select>
                  <select name = "year">
                      <option value="2018"> 2018</option>
                      <option value="2019"> 2019</option>
                      <option value="2020"> 2020</option>
                      <option value="2021"> 2021</option>
                      <option value ="2022">
                        2022
                      </option>
                  </select>
              </div>
              <div class = "form-group" id="card-type">
                <label>Card Type</label>
                <select name = "cardType">
                    <option value = "mastercard">
                      mastercard
                    </option>
                    <option value = "visa">
                      visa
                    </option>
                    <option value = "discover">
                      discover
                    </option>
                    <option value = "amex">
                      amex
                    </option>
                </select>
              </div>
              <input type = "hidden" name = "USER" value = "wpittmanBusiness1_api1.paypal.com" />
              <input type = "hidden" name = "PWD" value = "Q4MJKLB5BK7FHPNY"  />
              <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AadoqWmrIeK2Kws1Upn1JMc5P6pz" />
              <input type = "hidden" name = 'PAYMENTACTION' value = "Authorization" />
              <input type = "hidden" name = "AMT" value = "20.00" />
              <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
              <input type = "hidden" name = "COUNTRYCODE" value = "US" />
              <input type = "hidden" name = "VERSION" value = "58.0" />
              <div class="form-group" id="pay-now">
                  <button type="submit" class="btn btn-default" name = "METHOD" value = "DoDirectPayment" id="confirm-purchase">Confirm</button>
              </div>

          </form>
      </div>
  </div>

    </div>
  </div>

  <div class = "row">
    <div class = 'col-md-4 col-md-offset-4'>
      <div class="creditCardForm">
      <div class="heading">
          <h1>DoDirectPayment(sale)</h1>
      </div>
      <div class="payment">
          <form method = "post" action = "dodirect.php">
            <input type = "hidden" name = "url" value = "https://api-3t.sandbox.paypal.com/nvp" />
            <input type = "hidden" name = "VERSION" value = "58.0" />
              <div class="form-group owner">
                  <label for="owner">First Name</label>
                  <input type="text" name = "first" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">Last Name</label>
                  <input type="text" name = "last" class="form-control" id="owner">
              </div>
              <div class="form-group CVV">
                  <label for="cvv">CVV</label>
                  <input type="text" name = "cvv2" class="form-control" id="cvv">
              </div>
              <div class="form-group" id="card-number-field">
                  <label for="cardNumber">Card Number</label>
                  <input type="text" name = "cardnum" class="form-control" id="cardNumber">
              </div>
              <h3>Address</h3><br />
              <div class="form-group owner">
                  <label for="owner">Street</label>
                  <input type="text" name = "STREET" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">City</label>
                  <input type="text" name = "CITY" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">State</label>
                  <input type="text" name = "STATE" class="form-control" id="owner">
              </div>
              <div class="form-group owner">
                  <label for="owner">Zip</label>
                  <input type="text" name = "Zip" class="form-control" id="owner">
              </div>
              <div class="form-group" id="expiration-date">
                  <label>Expiration Date</label>
                  <select name = "month">
                      <option value="01">January</option>
                      <option value="02">February </option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                  </select>
                  <select name = "year">
                      <option value="2018"> 2018</option>
                      <option value="2019"> 2019</option>
                      <option value="2020"> 2020</option>
                      <option value="2021"> 2021</option>
                      <option value ="2022">
                        2022
                      </option>
                  </select>
              </div>
              <div class = "form-group" id="card-type">
                <label>Card Type</label>
                <select name = "cardType">
                    <option value = "mastercard">
                      mastercard
                    </option>
                    <option value = "visa">
                      visa
                    </option>
                    <option value = "discover">
                      discover
                    </option>
                    <option value = "amex">
                      amex
                    </option>
                </select>
              </div>
              <input type = "hidden" name = "USER" value = "wpittmanBusiness1_api1.paypal.com" />
              <input type = "hidden" name = "PWD" value = "Q4MJKLB5BK7FHPNY"  />
              <input type = "hidden" name = "SIGNATURE" value = "AFcWxV21C7fd0v3bYYYRCpSSRl31AadoqWmrIeK2Kws1Upn1JMc5P6pz" />
              <input type = "hidden" name = 'PAYMENTACTION' value = "Sale" />
              <input type = "hidden" name = "AMT" value = "20.00" />
              <input type = "hidden" name = "CURRENCYCODE" value = "USD" />
              <input type = "hidden" name = "COUNTRYCODE" value = "US" />
              <input type = "hidden" name = "VERSION" value = "58.0" />
              <div class="form-group" id="pay-now">
                  <button type="submit" class="btn btn-default" name = "METHOD" value = "DoDirectPayment" id="confirm-purchase">Confirm</button>
              </div>

          </form>
      </div>
  </div>

    </div>
  </div>


</div>


  <script src = "../script.js"></script>
  </body>
  </html>
