<?php
global  $error;
$GLOBALS["error"] = "";



function DeleteTenantProfile(
    $tenant_id,
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query =
        "DELETE FROM 
    `tenant` 
    WHERE tenant_id  = '$tenant_id'";

    if (mysqli_query($mysqli, $query)) {
        return "Success";
    }
}
