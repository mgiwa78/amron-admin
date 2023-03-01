<?php

require("./yabacon/paystack-php/src/autoload.php");


$paystack_secret_key = "sk_test_d766fc5b40a2b70285c9f52048431c24fe009e17";
$paystack_public_key = "pk_test_04ce7b3f751546859d4307b453c37740a7bf55ac";

// Retrieve transaction reference from form submission
$transaction_reference = $_POST['reference'];

// Create a new instance of Paystack

$paystack = new Yabacon\Paystack($paystack_secret_key);

// Verify transaction details
try {
    $transaction = $paystack->transaction->verify([
        'reference' => $transaction_reference,
    ]);
    $status = $transaction->status;
    $amount = $transaction->amount / 100;
    $currency = $transaction->currency;
    $customer_email = $transaction->customer->email;
    // Process successful payment
    if ($status === 'success') {
        // TODO: Add code to update your database or fulfill order
        echo "Payment of $amount $currency was successful. Thank you!";
    } else {
        echo "Payment failed. Please try again or contact customer support.";
    }
} catch (Exception $e) {
    echo "Error occurred: " . $e->getMessage();
}
