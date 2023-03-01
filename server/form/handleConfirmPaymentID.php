<?php
session_start();
include("../payment/confirmPaymenyProfileRequest.php");

if (isset($_POST["confirmPaymentProfileSubmit"])) {

    // $plot_location_tags = "";
    // $tags = json_decode($_POST["property_location"], true);
    // $i = 0;
    // while ($i < count($tags)) {
    //     $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
    //     $i++;
    // }


    $payment_profile_ID = $_POST["payment_profile_ID"];


    $request = ConfirmPaymentProfile($payment_profile_ID);
    print_r($request);


    if ($request[0]["Status"] === "Success") {

        $_SESSION["action_success"] = "Payment Profile Validated";
        header("Location: ../../profileConfirm.php?Pid=$payment_profile_ID");
    }
    if ($request[0]["Status"] === "Error") {

        $_SESSION["action_fail"] = "Invalid Payment Profile ID";
        header("Location: ../../paymentID.php");
    }
    if ($request[0]["Status"] === "Not Payments") {
        $_SESSION["action_fail"] = "Not Pending Payments on Payment Profile";
        header("Location: ../../paymentID.php");
    }
}
