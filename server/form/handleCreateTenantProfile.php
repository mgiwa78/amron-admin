<?php
session_start();
include("../update/UpdateActivityStack.php");
include("../post/NewTenantProfileRequest.php");

if (isset($_POST["createTenantProfileSubmit"])) {

    // $plot_location_tags = "";


    // $tags = json_decode($_POST["property_location"], true);
    // $i = 0;
    // while ($i < count($tags)) {
    //     $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
    //     $i++;
    // }
    if ((int)$_SESSION["user_type_id"] === 1) {
        $_SESSION["action_fail"] = "You Do not Have The Permisson For This Action";
        header("Location: ../../?action=addTenants");
    } else {
        $tenant_id = $_POST["tenant_id"];
        $tenant_f_name = $_POST["tenant_f_name"];
        $property_phase = $_POST["property_phase"];
        $tenant_l_name = $_POST["tenant_l_name"];
        $user_ID = $_POST["user_ID"];
        $tenant_property_type = $_POST["tenant_property_type"];
        $tenant_rent_amount = "";

        if ($tenant_property_type === "1") {
            $tenant_rent_amount = $_POST["tenant_rent_amount"];
        } else {
            $tenant_rent_amount = 0;
        }

        $rental_installment = $_POST["rental_installment"];
        $property_location = $_POST["property_location"];

        $request = CreateTenantProfile(
            $user_ID,
            $tenant_id,
            $tenant_f_name,
            $property_phase,
            $tenant_l_name,
            $tenant_property_type,
            $tenant_rent_amount,
            $rental_installment,
            $property_location,
        );

        if ($request === "Success") {

            $_SESSION["action_success"] = "Tenant Created Successfully";
            header("Location: ../../?action=addTenants");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "Tenant Failed To Create Successfully";
            header("Location: ../../?action=addTenants");
        }
    }
}
