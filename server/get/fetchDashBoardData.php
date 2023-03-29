<?php
include("./db_config.php");


function FetchPropertyCount()
{
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);



    $query = "SELECT *
        FROM 
            properties
        WHERE 1";

    $allPropertiesCount = mysqli_num_rows(mysqli_query($mysqli, $query));

    return $allPropertiesCount;
}
function FetchRentCount()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


    $query = "SELECT *
        FROM 
            rentals
        WHERE 1";

    $allRentalsCount = mysqli_num_rows(mysqli_query($mysqli, $query));

    return $allRentalsCount;
}
function FetchSaleCount()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


    $query = "SELECT *
        FROM 
            sale_properties
        WHERE 1";

    $allSaleCount = mysqli_num_rows(mysqli_query($mysqli, $query));

    return $allSaleCount;
}
function ActivityStack()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


    $query = "SELECT activity_id 
                FROM 
                    ativity_stack 
                ORDER BY activity_id DESC LIMIT 5;";

    $activities = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $activities;
}
function AllActivityStack()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


    $query = "SELECT activity_id 
                FROM 
                    ativity_stack 
                ORDER BY activity_id;";

    $activities = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $activities;
}

function ActivityStackByID($activity_id)
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


    $query = "SELECT `activity_type`, 
                        `activity_data_id`,
                        `date_performed`,
                        `activity_by`,
                        `activity_type`,
                        `activity_id` 
                FROM 
                    ativity_stack 
                WHERE activity_id= $activity_id;";

    $activities = mysqli_fetch_assoc(mysqli_query($mysqli, $query));
    return $activities;
}


function parseActivity(
    $activityData
) {
    $activity_type = $activityData['activity_type'];
    switch ($activity_type) {
        case 0:
            #  SALE_PROPERTY_CREATION

            return array("Created new property for sale", 0, "Property", "Property");
            break;
        case 1:
            #  RENTAL_PROPERTY_CREATION

            return array("Created new property for rent", 0, "Property");

            break;
        case 2:
            #  PROPERTY_MODIFICATION

            return
                array("Property modified", 0, "Property");

            break;
        case 3:
            #  ADDED_PROPERTY_IMAGE

            return  array("Property image added", 0, "Property");
            break;
        case 4:
            #  PAYMENT_PROFILE_CREATION

            return array("New payment profile created", 1, "Payment");
            break;
        case 5:
            #  PAYMENT_PROFILE_DELETION

            return array("Payment profile deleted", 1, "Payment");
            break;
        case 6:
            #  PAYMENT_PROFILE_MODIFICATION

            return array("Payment profile modified", 1, "Payment");
            break;
        case 7:
            #  USER_PROFILE_CREATION

            return  array("New user profile created", 2, "User");
            break;
        case 8:
            #  USER_PROFILE_DELETION

            return array("User profile deleted", 2, "User");
            break;
        case 9:
            #  USER_PROFILE_MODIFICATION

            return array("User profile modified", 2, "User");
            break;
        case 10:
            #  PLOT_CREATION

            return array("Plot created", 3, "Plot");
            break;
        case 11:
            #  PLOT_DELETION

            return array("Plot deleted", 3, "Plot");
            break;
        case 12:
            #  PLOT_MODIFICATION

            return array(
                "Plot modified", 3, "Plot"
            );
            break;
        case 13:
            #  TENANT_PROFILE_CREATION

            return array(
                "Tenant profile created", 4, "Tenant"
            );
            break;
        case 14:
            #  TENANT_PROFILE_DELETION

            return array(
                "Tenant profile deleted", 4, "Tenant"
            );
            break;
        case 15:
            #  TENANT_PROFILE_MODIFICATION

            return array(
                "Tenant profile modified", 4, "Tenant"
            );
            break;
        case 16:
            #  PAYMENT_RECORDING

            return array(
                "Payment recorded", 2, "Payment"
            );
            return "";
            break;
        case 17:
            #  PROPERTY_MODIFICATION

            return array(
                "Property Modified", 0, "Property"
            );
            break;

        default:
            # code...
            break;
    }
}
