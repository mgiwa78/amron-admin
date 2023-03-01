<?php

function FetchPaymentProfile($client_payment_id)
{
    $status = array("Status" => "Error");

    $PaymentProfileData = false;
    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT *
        FROM 
            payment_profiles
        WHERE client_payment_id='$client_payment_id'";

    if (mysqli_query($mysqli, $query)) {
        $PaymentProfileData = mysqli_fetch_assoc(mysqli_query($mysqli, $query));
        $status = array("Status" => "Success");
    }

    array_push($PaymentProfileData, $status);
    return $PaymentProfileData;
}
