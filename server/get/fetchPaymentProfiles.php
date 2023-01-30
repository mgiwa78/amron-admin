<?php

function FetchPaymentProfileIDs()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT `client_payment_id` FROM `payment_profiles` WHERE 1";

    $payment_IDs = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $payment_IDs;
}
function FetchPaymentProfileByID($payment_id)
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT `client_payment_id`, 
                `client_f_name`, 
                `client_l_name`, 
                `amount_to_pay`, 
                `property_phase`, 
                `payment_type`, 
                `plot_location_tags`, 
                `profile_id`,
                `amount_paid`,
                `profile_status`,
                `profile_description`
            FROM 
            `payment_profiles` 
            WHERE client_payment_id='$payment_id' ";
    $paymenyProfile = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $paymenyProfile;
}
