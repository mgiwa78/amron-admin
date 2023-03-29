<?php
include("../update/UpdateActivityStack.php");
include("../../db_config.php");
global  $error;
$GLOBALS["error"] = "";





function DeleteTenantProfile(
    $tenant_id,
    $user_ID
) {
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


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
