<?php
session_start();
include("../post/RecordNewPaymentRequest.php");
include("../update/UpdateActivityStack.php");


if (isset($_POST["recordPaymentSubmit"])) {
    if ((int)$_SESSION["user_type_id"] === 1) {
        $_SESSION["action_fail"] = "You Do not Have The Permisson For This Action";
        header("Location: ../../?action=recordPayment");
    } else {
        $plot_location_tags = "";


        $tags = json_decode($_POST["property_location"], true);
        $i = 0;
        while ($i < count($tags)) {
            $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
            $i++;
        }

        $client_f_name = $_POST["client_f_name"];
        $client_l_name = $_POST["client_l_name"];
        $amount_paid = $_POST["amount_paid"];
        $amount_due = $_POST["amount_due"];
        $payment_date = $_POST["payment_date"];
        $property_phase = $_POST["property_phase"];
        $payment_type = $_POST["payment_type"];
        $user_ID = $_POST["user_ID"];

        $plot_location_tags = $plot_location_tags;

        $request = RecordNewPayment(
            $user_ID,
            $client_f_name,
            $client_l_name,
            $amount_paid,
            $amount_due,
            $payment_date,
            $property_phase,
            $payment_type,
            $plot_location_tags,
        );

        if ($request === "Success") {

            $_SESSION["action_success"] = "Payment Recorded Successfully";
            header("Location: ../../?action=recordPayment");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "Payment Failed To Recorded Successfully";
            header("Location: ../../?action=recordPayment");
        }
    }
}
