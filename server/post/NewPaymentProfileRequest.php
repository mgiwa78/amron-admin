<?php
global  $error;
$GLOBALS["error"] = "";



function CreatePaymentProfile(
    $client_payment_id,
    $client_f_name,
    $client_l_name,
    $amount_to_pay,
    $property_phase,
    $payment_type,
    $plot_location_tags,
) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

    // Check connection
    $query = "INSERT INTO 
                `payment_profiles`(
                    `client_payment_id`, 
                    `client_f_name`, 
                    `client_l_name`, 
                    `amount_to_pay`, 
                    `property_phase`, 
                    `payment_type`, 
                    `plot_location_tags`,
                    `profile_status`
                    ) 
                VALUES (
                    '$client_payment_id',
                    '$client_f_name',
                    '$client_l_name',
                    '$amount_to_pay',
                    '$property_phase',
                    '$payment_type',
                    '$plot_location_tags',
                    '1'
                    )";

    if (mysqli_query($mysqli, $query)) {
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
