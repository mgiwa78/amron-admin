<?php
session_start();
include("../post/NewPaymentProfileRequest.php");

if (isset($_POST["createPaymentProfileSubmit"])) {
    if ((int)$_SESSION["user_type_id"] === 1) {
        $_SESSION["action_fail"] = "You Do not Have The Permisson For This Action";
        header("Location: ../../?action=createPaymentsProfile");
    } else {
        $plot_location_tags = "";


        $tags = json_decode($_POST["property_location"], true);
        $i = 0;
        while ($i < count($tags)) {
            $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
            $i++;
        }

        $client_payment_id = $_POST["client_payment_id"];
        $client_f_name = $_POST["client_f_name"];
        $client_l_name = $_POST["client_l_name"];
        $amount_to_pay = $_POST["amount_to_pay"];
        $property_phase = $_POST["property_phase"];
        $payment_type = $_POST["payment_type"];
        $user_id = $_POST["user_ID"];
        $plot_location_tags = $plot_location_tags;

        $request = CreatePaymentProfile(
            $user_id,
            $client_payment_id,
            $client_f_name,
            $client_l_name,
            $amount_to_pay,
            $property_phase,
            $payment_type,
            $plot_location_tags,
        );

        if ($request === "Success") {

            $_SESSION["action_success"] = "Payment Profile Created Successfully";
            header("Location: ../../?action=createPaymentsProfile");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "Payment Failed To Create Successfully";
            header("Location: ../../?action=createPaymentsProfile");
        }
    }
}
