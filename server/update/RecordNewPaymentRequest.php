<?php
include("./db_config.php");


global  $error;
$GLOBALS["error"] = "";



function RecordNewPayment(
    $client_f_name,
    $client_l_name,
    $amount_paid,
    $amount_due,
    $payment_date,
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
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
