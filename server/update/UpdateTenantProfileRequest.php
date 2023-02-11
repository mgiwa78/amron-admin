<?php
global  $error;
$GLOBALS["error"] = "";

function UpdateTenantProfile(
    $tenant_id,
    $tenant_f_name,
    $property_phase,
    $tenant_l_name,
    $tenant_property_type,
    $tenant_rent_amount,
    $rental_installment,
    $property_location,
) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

    // Check connection
    $query =
        "UPDATE
                `tenant`
        SET 
                    `tenant_f_name`='$tenant_f_name',
                    `tenant_l_name`='$tenant_l_name',
                    `tenant_phase_id`='$property_phase',
                    `tenant_location`='$property_location',
                    `tenant_type_id`='$tenant_property_type',
                    `tenant_rental_amount`='$tenant_rent_amount',
                    `tenant_rental_installment`='$rental_installment'
        WHERE 
        tenant_id='$tenant_id'";

    if (mysqli_query($mysqli, $query)) {
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
