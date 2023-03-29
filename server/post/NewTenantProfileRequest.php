<?php
include("./db_config.php");

global  $error;
$GLOBALS["error"] = "";



function CreateTenantProfile(
    $user_ID,
    $tenant_id,
    $tenant_f_name,
    $property_phase,
    $tenant_l_name,
    $tenant_property_type,
    $tenant_rent_amount,
    $rental_installment,
    $property_location,
) {

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check connection
    $query = "INSERT INTO 
                `tenant`(
                    `tenant_id`, 
                    `tenant_f_name`, 
                    `tenant_phase_id`, 
                    `tenant_l_name`, 
                    `tenant_type_id`, 
                    `tenant_rental_amount`, 
                    `tenant_rental_installment`, 
                    `tenant_location`
                    ) 
                VALUES (
                    '$tenant_id',
                    '$tenant_f_name',
                    '$property_phase',
                    '$tenant_l_name',
                    '$tenant_property_type',
                    '$tenant_rent_amount',
                    '$rental_installment',
                    '$property_location')";

    if (mysqli_query($mysqli, $query)) {
        AddNewActivity(
            $user_ID,
            "TENANT_PROFILE_CREATION",
            $tenant_id,
        );
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
