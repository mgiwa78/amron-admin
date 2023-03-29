<?php
session_start();
include("../update/UpdatePaymentProfileRequest.php");
include("../delete/DeletePaymentProfileRequest.php");
echo "ss";

if (isset($_POST["UpdatePaymentProfileSubmit"])) {
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
        $user_id = $_POST["user_id"];
        $payment_type = $_POST["payment_type"];
        $plot_location_tags = $plot_location_tags;

        $request = UpdatePaymentProfile(
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

            $_SESSION["action_success"] = "Payment Profile Updated Successfully";
            header("Location: ../../?action=ViewPaymentProfile&ProfileID=$client_payment_id");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "Payment Failed To Update Successfully";
            header("Location: ../../?action=ViewPaymentProfile&ProfileID=$client_payment_id");
        }
    }
}
if (isset($_POST["DeletePaymentProfile"])) {
    $payment_profile_id = $_POST["client_payment_id"];

    $request = DeletePaymentProfile($payment_profile_id);
    if ($request === "Success") {

        $_SESSION["action_success"] = "Payment Profile Deleted Successfully";
        header("Location: ../../?action=paymentsProfiles");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Payment Profile Failed To Delete Successfully";
        header("Location: ../../?action=paymentsProfiles");
    }
}
