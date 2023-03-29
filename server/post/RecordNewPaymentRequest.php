<?php
include("./db_config.php");
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

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check connection
    $prefix = 'Pid-';
    $suffix = '-2023';
    $payment_id = uniqid($prefix, true) . $suffix;
    $payment_id;

    $query = "INSERT INTO 
                `payment`(
                    `client_f_name`, 
                    `client_l_name`, 
                    `amount_paid`, 
                    `amount_due`, 
                    `payment_date`, 
                    `property_phase`, 
                    `payment_type`, 
                    `payment_id`, 
                    `property_location`
                    ) 
                VALUES (
                    '$client_f_name',
                    '$client_l_name',
                    '$amount_paid',
                    '$amount_due',
                    '$payment_date',
                    '$property_phase',
                    '$payment_type',
                    '$payment_id',
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
