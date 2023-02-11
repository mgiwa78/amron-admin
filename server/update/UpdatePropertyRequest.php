<?php
global  $error;
$GLOBALS["error"] = "";



function UpdateProperty(
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


    $mysqli = new mysqli("localhost", "root", "", "amron");

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
            WHERE property_id = $property_id";

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
            WHERE  property_id=$property_id";

            if (mysqli_query($mysqli, $rentQuery)) {
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
