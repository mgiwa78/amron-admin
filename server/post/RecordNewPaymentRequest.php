<?php
global  $error;
$GLOBALS["error"] = "";



function RecordNewPayment(
    $user_ID,
    $client_f_name,
    $client_l_name,
    $amount_paid,
    $amount_due,
    $payment_date,
    $property_phase,
    $payment_type,
    $plot_location_tags,
) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

    // Check connection


    $query = "INSERT INTO 
                `payment`(
                    `client_f_name`, 
                    `client_l_name`, 
                    `amount_paid`, 
                    `amount_due`, 
                    `payment_date`, 
                    `property_phase`, 
                    `payment_type`, 
                    `property_location`) 
                VALUES (
                    '$client_f_name',
                    '$client_l_name',
                    '$amount_paid',
                    '$amount_due',
                    '$payment_date',
                    '$property_phase',
                    '$payment_type',
                    '$plot_location_tags')";

    if (mysqli_query($mysqli, $query)) {
        $paymentID = mysqli_insert_id($mysqli);

        AddNewActivity(
            $user_ID,
            "PAYMENT_RECORDING",
            $paymentID,
        );
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
