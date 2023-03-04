<?php
// Start the session
session_start();

// Include the Paystack PHP library
require_once('paystack-php-1.0.0/src/autoload.php');

// Set your API key
$paystack = new Yabacon\Paystack('YOUR_PAYSTACK_SECRET_KEY');

// Check if the payment ID is set
if (isset($_GET['payment_id'])) {
  $payment_id = $_GET['payment_id'];

  // Fetch the payment amount from the database
  $mysqli = new mysqli('localhost', 'username', 'password', 'database_name');
  $stmt = $mysqli->prepare("SELECT amount FROM payments WHERE payment_id = ?");
  $stmt->bind_param("s", $payment_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $payment_amount = $row['amount'];
  $stmt->close();

  // Set the payment parameters
  $payment_data = array(
    "amount" => $payment_amount * 100, // Paystack requires amount to be in kobo
    "email" => "customer@example.com", // Customer's email
    "metadata" => array(
      "payment_id" => $payment_id, // Payment ID from your database
    ),
  );

  // Initialize the payment with Paystack
  try {
    $transaction = $paystack->transaction->initialize($payment_data);
  } catch (Yabacon\Paystack\Exception\ApiException $e) {
    // Handle the error
    die($e->getMessage());
  }

  // Generate the payment form
  $payment_form = "<script src='https://js.paystack.co/v1/inline.js'></script>
    <button type='button' onclick='payWithPaystack()'>Pay Now</button>
    <script>
      function payWithPaystack() {
        var handler = PaystackPop.setup({
          key: '" . $paystack->getPublicKey() . "',
          email: 'customer@example.com',
          amount: " . $payment_amount * 100 . ",
          ref: '" . $transaction->data->reference . "',
          metadata: {
             payment_id: '" . $payment_id . "',
          },
          callback: function(response) {
              window.location.href = 'payment-success.php?reference=' + response.reference + '&payment_id=" . $payment_id . "';
          },
          onClose: function() {
              alert('Payment cancelled.');
          }
        });
        handler.openIframe();
      }
    </script>";

  // Display the payment form to the customer
  echo $payment_form;
} else {
  // Redirect to the payment page if the payment ID is not set
  header("Location: payment.php");
  exit();
}
