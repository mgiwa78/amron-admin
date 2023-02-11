<?php
global  $error;
$GLOBALS["error"] = "";



function DeletePaymentProfile(
    $payment_profile_id,
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

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
