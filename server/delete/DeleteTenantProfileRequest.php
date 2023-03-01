<?php
global  $error;
$GLOBALS["error"] = "";



function DeleteTenantProfile(
    $tenant_id,
    $user_ID
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query =
        "DELETE FROM 
    `tenant` 
    WHERE tenant_id  = '$tenant_id'";

    if (mysqli_query($mysqli, $query)) {
        AddNewActivity(
            $user_ID,
            "TENANT_PROFILE_DELETION",
            $tenant_id,
        );
        return "Success";
    }
}
