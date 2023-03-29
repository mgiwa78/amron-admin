<?php
global  $error;
$GLOBALS["error"] = "";

include("../../db_config.php");


function DeletePaymentProfile(
    $payment_profile_id,
) {
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query =
        "DELETE FROM 
    `payment_profiles` 
    WHERE client_payment_id = '$payment_profile_id'";

    if (mysqli_query($mysqli, $query)) {
        return "Success";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
