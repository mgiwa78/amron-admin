<?php
include("./db_config.php");

function FetchPaymentIDs()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT `payment_id` FROM `payment` WHERE 1";

    $paymentIDs = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $paymentIDs;
}
function FetchPaymentByID($property_Id)
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT 
                `payment_id`, 
                `client_l_name`, 
                `client_f_name`, 
                `amount_paid`, 
                `amount_due`, 
                `payment_type`, 
                `payment_date`, 
                `property_location`, 
                `property_phase`,
                `payment_description` 
                FROM 
                    `payment` 
                WHERE payment_id='$property_Id'";
    $property = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $property;
}
