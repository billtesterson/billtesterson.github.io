<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
    <div id="paypal-button-container"></div>
    <ul>
      <li>
        <span id = "token"></span>
      </li>
      <li>
        <span id = "ack"></span>
      </li>
    </ul>
    <script>
        paypal.Button.render({

            env: 'sandbox', // sandbox | production

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function() {

                // Set up a url on your server to create the payment
                var CREATE_URL = 'setec.php';

                // Make a call to your server to set up the payment
                return paypal.request.post(CREATE_URL)
                    .then(function(res) {
                      console.log(res);
                        return res;
                    });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Set up a url on your server to execute the payment
                var EXECUTE_URL = 'doec.php';

                // Set up the data you need to pass to your server
                var data = {
                    paymentToken: data.paymentToken,
                    payerID: data.payerID
                };

                // Make a call to your server to execute the payment
                return paypal.request.post(EXECUTE_URL, data)
                    .then(function (res) {
                        var data = decodeURI(res);
                        data = data.split('&');
                        console.log(data);
                        document.querySelector('#token').innerText = data[0];
                        document.querySelector('#ack').innerText = data[4];
                    });
            }

        }, '#paypal-button-container');
    </script>
    </body>
</html>
