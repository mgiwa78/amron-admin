<?php
session_start();
include("../update/UpdateTenantProfileRequest.php");
include("../delete/DeleteTenantProfileRequest.php");

if (isset($_POST["UpdateTenantProfileSubmit"])) {

    // $plot_location_tags = "";


    // $tags = json_decode($_POST["property_location"], true);
    // $i = 0;
    // while ($i < count($tags)) {
    //     $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
    //     $i++;
    // }

    $user_ID = $_POST["user_ID"];
    $tenant_id = $_POST["tenant_id"];
    $tenant_f_name = $_POST["tenant_f_name"];
    $property_phase = $_POST["property_phase"];
    $tenant_l_name = $_POST["tenant_l_name"];
    $tenant_property_type = $_POST["tenant_property_type"];
    $tenant_rent_amount = "";

    if ($tenant_property_type === "1") {
        $tenant_rent_amount = $_POST["tenant_rent_amount"];
    } else {
        $tenant_rent_amount = 0;
    }

    $rental_installment = $_POST["rental_installment"];
    $property_location = $_POST["property_location"];

    $request = UpdateTenantProfile(
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

        $_SESSION["action_success"] = "Tenant Upadated Successfully";
        header("Location: ../../?action=ViewTenants&TenantID=$tenant_id");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Tenant Failed To Upadate Successfully";
        header("Location: ../../?action=ViewTenants&TenantID=$tenant_id");
    }
}
if (isset($_POST["DeleteTenantProfile"])) {

    $tenant_id = $_POST["tenant_id"];
    $user_ID = $_POST["user_ID"];

    $request = DeleteTenantProfile($tenant_id, $user_ID);
    if ($request === "Success") {

        $_SESSION["action_success"] = "Tenant Profile Deleted Successfully";
        header("Location: ../../?action=allTenants");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Tenant Profile Failed To Delete Successfully";
        header("Location: ../../?action=allTenants");
    }
}
