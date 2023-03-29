<?php
// Start a session
session_start();
include("./db_config.php");


$mysqli = new mysqli($host, $user, $pass, $db);
// Include the Paystack library
require_once('autoload.php');

// Set your Paystack API key
$paystack = new Yabacon\Paystack('sk_test_d766fc5b40a2b70285c9f52048431c24fe009e17');

// Check if a payment ID was submitted
if (isset($_Get['payment_id'])) {
    // Retrieve the payment ID from the form
    $payment_id = $_Get['payment_id'];

    // Connect to the MySQL database
    $mysqli = new mysqli(
        $host,
        $user,
        $pass,
        $db
    );

    // Check for connection error
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    // Prepare a query to fetch the payment amount from the database
    $stmt = $mysqli->prepare("SELECT amount_to_pay FROM payment_profiles WHERE client_payment_id = ?");
    $stmt->bind_param("s", $payment_id);
    $stmt->execute();

    // Fetch the payment amount
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $payment_amount = $row['amount_to_pay'];

    // Close the database connection
    $stmt->close();
    $mysqli->close();

    // Initialize a payment with Paystack
    $payment_data = array(
        'amount' => $payment_amount * 100, // Paystack accepts amount in kobo
        'email' => 'customer@example.com',
        'metadata' => array(
            'payment_id' => $payment_id
        )
    );
    try {
        $payment = $paystack->transaction->initialize($payment_data);
    } catch (Yabacon\Paystack\Exception\ApiException $e) {
        die($e->getMessage());
    }

    // Redirect the customer to the Paystack payment page
    header('Location: ' . $payment->data->authorization_url);
} elseif (isset($_GET['reference'])) {
    // Retrieve the payment reference from the query string
    $reference = $_GET['reference'];

    // Verify the payment with Paystack
    try {
        $transaction = $paystack->transaction->verify(['reference' => $reference]);
    } catch (Yabacon\Paystack\Exception\ApiException $e) {
        die($e->getMessage());
    }

    // Retrieve the payment ID from the metadata
    $metadata = $transaction->data->metadata;
    $payment_id = $metadata->payment_id;

    // Connect to the MySQL database
    $mysqli = new mysqli(
        $host,
        $user,
        $pass,
        $db
    );


    // Check for connection error
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    // Update the payment status and amount in the database if the payment was successful
    if ($transaction->status && $transaction->data->status == "success") {
        $stmt = $mysqli->prepare("UPDATE payment_profiles SET amount_paid = ? WHERE payment_id = ?");
        $payment_status = "paid";
        $payment_amount_paid = $transaction->data->amount / 100;
        $stmt->bind_param("ss", $payment_amount_paid, $payment_id);
        $stmt->execute();
        $stmt->close();

        // Set the payment status in the session
        $_SESSION["payment_status"] = "paid";
    }
}
