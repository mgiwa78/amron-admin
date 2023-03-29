<?php
include("../update/UpdateActivityStack.php");
include("./db_config.php");

global  $error;
$GLOBALS["error"] = "";



function UpdateProperty(
    $user_ID,
    $property_id,
    $property_location_tags,
    $property_typology,
    $property_type,
    $property_sale_price,
    $property_rent_price,
    $property_phase,
    $property_rent_installment,
    $property_bedroom_amount,
    $property_bathroom_amount,
    $type_data_id,
    $property_web_display,
    $property_availability
) {


    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

        // Check connection
    ;
    #
    $query = "UPDATE 
                    `properties`    
                SET 
                    `property_typology`='$property_typology',
                    `property_bedrooms`='$property_bedroom_amount',
                    `property_bathrooms`='$property_bathroom_amount',
                    `property_location`='$property_location_tags',
                    `property_phase`='$property_phase',
                    `type_id`='$property_type',
                    `web_display`='$property_web_display',
                    `available`='$property_availability'
            WHERE property_id = '$property_id'";

    if (mysqli_query($mysqli, $query)) {


        if ($property_type === "2") {
            ///
            ///  If property is for RENT
            ///
            $rentQuery = "UPDATE 
                `rentals` 
            SET 
                `rental_price`='$property_rent_price',
                `rental_installment`='$property_rent_installment'
            WHERE  property_id='$property_id'";

            if (mysqli_query($mysqli, $rentQuery)) {
                AddNewActivity(
                    $user_ID,
                    "PROPERTY_MODIFICATION",
                    $property_id,
                );
                return "Success";
            }
        }

        if ($property_type === "1") {
            ///
            ///  If property is for SALE
            ///
            $saleQuery = "UPDATE 
                                `sale_properties` 
                            SET 
                                `sale_property_price`='$property_sale_price'
                            WHERE property_id = '$property_id'";

            if (mysqli_query($mysqli, $saleQuery)) {
                AddNewActivity(
                    $user_ID,
                    "PROPERTY_MODIFICATION",
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
function UploadPropertyImage(
    $file_name,
    $property_id,
) {
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

        // Check connection
    ;
    $prevPictures =  explode("#**#", mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM `properties` WHERE property_id = $property_id"))["property_pictures"]);
    print_r($prevPictures);
    if (in_array($file_name, $prevPictures)) return;
    else {
        $newPictures = join("#**#", $prevPictures) . "#**#" . $file_name;
    }

    $query = "UPDATE 
                    `properties`    
                SET 
                    `property_pictures`='$newPictures'

            WHERE property_id = '$property_id'";

    if (mysqli_query($mysqli, $query)) {
    };
}
function DeletePropertyImage(
    $file_name,
    $property_id,
) {
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

        // Check connection
    ;
    $prevPictures =  explode("#**#", mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM `properties` WHERE property_id = $property_id"))["property_pictures"]);

    if (($key = array_search($file_name, $prevPictures)) !== false) {
        unset($prevPictures[$key]);
    }
    // if (in_array($file_name, $prevPictures)) return;
    // else {
    //     $newPictures = join("#**#", $prevPictures) . "#**#" . $file_name;
    // }
    $newPictures = join("#**#", $prevPictures);
    $query = "UPDATE 
                    `properties`    
                SET 
                    `property_pictures`='$newPictures'

            WHERE property_id = '$property_id'";

    if (mysqli_query($mysqli, $query)) {
    };
}
