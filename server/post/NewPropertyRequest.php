<?php
include("../update/UpdateActivityStack.php");
include("./db_config.php");

global  $error;
$GLOBALS["error"] = "";



function CreateNewProperty(
    $user_ID,
    $property_location_tags,
    $property_typology,
    $property_type,
    $property_sale_price,
    $property_rent_price,
    $property_phase,
    $property_rent_installment,
    $property_bedroom_amount,
    $property_bathroom_amount
) {


    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check connection


    $query = "INSERT INTO 
                `properties`(
                    `property_typology`, 
                    `property_bedrooms`, 
                    `property_bathrooms`, 
                    `property_location`, 
                    `property_phase`, 
                    `web_display`, 
                    `type_id`) 
                VALUES (
                    '$property_typology',
                    '$property_bedroom_amount',
                    '$property_bathroom_amount',
                    '$property_location_tags',
                    '$property_phase',
                    '1',
                    '$property_type')";

    if (mysqli_query($mysqli, $query)) {

        $property_id = mysqli_insert_id($mysqli);
        echo $property_id;


        if ($property_type === "2") {
            ///
            ///  If property is for RENT
            ///
            $rentQuery = "INSERT INTO 
                    `rentals`(
                        `rental_price`, 
                        `rental_installment`,
                        `property_id`) 
                        VALUES (
                            '$property_rent_price',
                            '$property_rent_installment',
                            '$property_id')";

            if (mysqli_query($mysqli, $rentQuery)) {


                $rental_id = mysqli_insert_id($mysqli);


                $updateQuery = "UPDATE 
                                    `properties` 
                                SET 
                                    `type_data`='$rental_id'

                                WHERE property_id=$property_id";

                if (mysqli_query($mysqli, $updateQuery)) {
                    AddNewActivity(
                        $user_ID,
                        "RENT_PROPERTY_CREATION",
                        $property_id,
                    );
                };
            } else {
                $GLOBALS["error"] = "Error Occured";
            };
        }

        if ($property_type === "1") {
            ///
            ///  If property is for SALE
            ///
            $saleQuery = "INSERT INTO 
                    `sale_properties`(
                        `sale_property_price`, 
                        `property_id`)
                        VALUES (
                            '$property_sale_price',
                            '$property_id')";

            if (mysqli_query($mysqli, $saleQuery)) {
                $sale_id = mysqli_insert_id($mysqli);


                $updateQuery = "UPDATE 
                                    `properties` 
                                SET 
                                    `type_data`='$sale_id'
                                WHERE property_id=$property_id";

                if (mysqli_query($mysqli, $updateQuery)) {
                    AddNewActivity(
                        $user_ID,
                        "SALE_PROPERTY_CREATION",
                        $property_id,
                    );
                };
            } else {
                $GLOBALS["error"]  = "Error Occured";
            }
        }
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
