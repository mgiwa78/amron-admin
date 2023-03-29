<?php
global  $error;
$GLOBALS["error"] = "";

include("../../db_config.php");



function DeleteProperty(
    $property_id,
    $property_type,
    $user_ID

) {

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query =
        "DELETE FROM 
    `properties` 
    WHERE property_id = $property_id";

    if (mysqli_query($mysqli, $query)) {


        if ($property_type === "2") {
            ///
            ///  If property is for RENT
            ///
            $rentQuery =
                "DELETE FROM 
                        `rentals` 
                    WHERE property_id = $property_id";

            if (mysqli_query($mysqli, $rentQuery)) {
                return "Success";
            }
        }

        if ($property_type === "1") {
            ///
            ///  If property is for SALE
            ///
            $saleQuery = "DELETE FROM 
                        `sale_properties` 
                    WHERE property_id = $property_id";

            if (mysqli_query($mysqli, $saleQuery)) {
                AddNewActivity(
                    $user_ID,
                    "PROPERTY_DELETION",
                    $property_id,
                );
                return "Success";
            }
        }
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
