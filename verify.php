<?php
include("./server/post/RecordNewPaymentRequest.php");
include("./server/get/fetchPaymentProfiles.php");
include("./server/update/UpdateActivityStack.php");

if (isset($_GET['reference'])) {
    // Get the payment reference from the URL parameter
    $payment_reference = $_GET['reference'];

    // Verify the payment using the Paystack API
    $paystack_secret_key = 'sk_test_d766fc5b40a2b70285c9f52048431c24fe009e17';
    require_once('./server/payment/autoload.php');

    $paystack = new Yabacon\Paystack($paystack_secret_key);
    try {
        $transaction = $paystack->transaction->verify([
            'reference' => $payment_reference,
        ]);
    } catch (Exception $e) {
        echo 'Error verifying payment: ' . $e->getMessage();
        exit();
    }

    // Check if the payment was successful
    if ($transaction->status && $transaction->data->status == "success") {
        // Get the payment ID from the payment metadata
        $payment_id = $transaction->data->metadata->payment_id;
        echo "Valid Transaction";
        // Connect to the database
        $mysqli = new mysqli("localhost", "root", "", "amron");

        $stmt = $mysqli->prepare("UPDATE payment_profiles SET amount_paid = ? WHERE client_payment_id = ?");
        $payment_status = "paid";
        $payment_amount_paid = $transaction->data->amount / 100;
        $stmt->bind_param("ss", $payment_amount_paid, $payment_id);
        $stmt->execute();
        $stmt->close();

        $date_created = date("Y-m-d H:i:s");

        $profileData = FetchPaymentProfileByID($payment_id);

        RecordNewPayment(
            1,
            $profileData["client_f_name"],
            $profileData["client_l_name"],
            $payment_amount_paid,
            0,
            $date_created,
            $profileData["property_phase"],
            $profileData["payment_type"],
            $profileData["plot_location_tags"]
        );
        // Check for database connection errors
        if ($mysqli->connect_errno) {
            echo "Connection Failed";
        }
    } else {
        echo "Invalid Transaction";
    }
}
