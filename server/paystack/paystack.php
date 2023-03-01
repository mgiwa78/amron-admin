<?php
// Replace with your own API keys


// Generate Paystack popup form
function generate_paystack_popup_form($amount, $email)
{
    $amount_in_kobo = $amount * 100; // convert to kobo (the smallest currency unit)
    return <<<HTML
        <form method="POST" action="./init.php" id="paystack-form">
            <script src="https://js.paystack.co/v1/inline.js"></script>
            <button type="button" onclick="payWithPaystack()">Pay Now</button>
            <script>
                function payWithPaystack() {
                    var handler = PaystackPop.setup({
                        key: 'pk_test_04ce7b3f751546859d4307b453c37740a7bf55ac',
                        email: '$email',
                        amount: $amount_in_kobo,
                        currency: 'NGN',
                        callback: function(response) {
                            console.log(response)
                            document.getElementById('reference').value = response.reference;
                        },
                        onClose: function() {
                            alert('Payment window closed.');
                        }
                    });
                    handler.openIframe();
                }
            </script>
            <input type="hidden" name="reference" id="reference">
        </form>
    HTML;
}

// Display Paystack popup form
echo generate_paystack_popup_form(1000, "test@example.com"); // replace with actual amount and email
