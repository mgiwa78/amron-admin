<?php
include("./db_config.php");
include("./db_config.php");

global  $error;
$GLOBALS["error"] = "";




function UpdatePaymentProfile(
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


    $query = "UPDATE 
        `payment_profiles` 
    SET 
        `client_f_name`='$client_f_name',
        `client_l_name`='$client_l_name',
        `amount_to_pay`='$amount_to_pay',
        `property_phase`='$property_phase',
        `payment_type`='$payment_type',
        `plot_location_tags`='$plot_location_tags'

     WHERE client_payment_id='$client_payment_id'";

    if (mysqli_query($mysqli, $query)) {
        AddNewActivity(
            $user_id,
            "PAYMENT_PROFILE_MODIFICATION",
            $client_payment_id
        );
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
