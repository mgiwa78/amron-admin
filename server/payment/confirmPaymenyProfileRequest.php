<?php
include("./db_config.php");


function ConfirmPaymentProfile($client_payment_id)
{
    $status = array("Status" => "Error");

    $PaymentProfileData = false;
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

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
