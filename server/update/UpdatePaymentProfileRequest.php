<?php
global  $error;
$GLOBALS["error"] = "";
include("../update/UpdateActivityStack.php");



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


    $mysqli = new mysqli("localhost", "root", "", "amron");

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
