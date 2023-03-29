<?php
include("../update/UpdateActivityStack.php");
include("./db_config.php");

global  $error;
$GLOBALS["error"] = "";



function CreatePaymentProfile(
    $user_id,
    $client_payment_id,
    $client_f_name,
    $client_l_name,
    $amount_to_pay,
    $property_phase,
    $payment_type,
    $plot_location_tags,
) {


    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

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
        AddNewActivity(
            $user_id,
            "PAYMENT_PROFILE_CREATION",
            $client_payment_id,
        );
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
