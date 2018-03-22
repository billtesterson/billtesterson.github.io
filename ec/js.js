$( document ).ready(function() {
            function isValid() {
                return document.querySelector('#paypalAgreement').checked;
            }

            function onChangeCheckbox(handler) {
                document.querySelector('#paypalAgreement').addEventListener('change', handler);
            }

            function toggleValidationMessage() {
                document.querySelector('#msg').style.display = (isValid() ? 'none' : 'block');
            }

            function toggleButton(actions) {
                return isValid() ? actions.enable() : actions.disable();
            }
            paypal.Button.render({
                    env:
                                'sandbox',

                        client: {
                            sandbox: 'AWlk59kISCX0AO6aQgOjgEF7-ob2C5IEwPxawT5IDEkOuqvPwwwhKMyxmGXdPVk8yguA753jWYkr15GW'


                },
                style: {
                label: 'paypal',
                    size:  'responsive',    // small | medium | large | responsive
                    shape: 'rect',     // pill | rect
                    color: 'blue',     // gold | blue | silver | black
                    tagline: false
            },
            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

                // payment() is called when the button is clicked
                payment: function(data, actions) {
                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: $('#PayPalAmount').val(), currency: $('#PayPalCurrency').val() }
                            }
                        ]
                    }
                });
            },
            validate: function(actions) {
                toggleButton(actions);

                onChangeCheckbox(function() {
                    toggleButton(actions);
                });
            },
            onClick: function() {
                toggleValidationMessage();
            },
            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {
                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function(data) {
                    if (data == undefined) {
                        return;
                    }
                    var model = {
                        'PaymentStatus':data.state,
                        'PayerStatus':data.payer.status,
                        'PaymentID':data.id,
                        'CartID':data.cart,
                        'EmailAddress':data.payer.payer_info.email,
                        'PayerID':data.payer.payer_info.payer_id,
                        'Country':data.payer.payer_info.shipping_address.country_code,
                        'Address':data.payer.payer_info.shipping_address.line1,
                        'City':data.payer.payer_info.shipping_address.city,
                        'State':data.payer.payer_info.shipping_address.state,
                        'ZipCode':data.payer.payer_info.shipping_address.postal_code
                    };

                });
            },
            onCancel: function(data, actions) {

            },

            onError: function(err) {

            }

        }, '#paypal-button-container');

        });
