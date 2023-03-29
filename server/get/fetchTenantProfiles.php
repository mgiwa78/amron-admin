<?php
include("./db_config.php");


$mysqli = new mysqli($host, $user, $pass, $db);
function FetchTenantProfileIDs()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT `tenant_id` FROM `tenant` WHERE 1";

    $tenant_IDs = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $tenant_IDs;
}
function FetchTenantByID($tenant_id)
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT 
        `tenant_id`, 
        `tenant_f_name`, 
        `tenant_l_name`, 
        `tenant_phase_id`, 
        `tenant_location`, 
        `tenant_type_id`, 
        `tenant_rental_amount`, 
        `tenant_rental_installment`
        FROM 
            tenant
        WHERE tenant_id = '$tenant_id'";

    $tenantProfile = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $tenantProfile;
}
