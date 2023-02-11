<?php
global  $error;
$GLOBALS["error"] = "";



function DeleteProperty(
    $property_id,
    $property_type,

) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

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
                return "Success";
            }
        }
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
