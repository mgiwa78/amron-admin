<?php

function FetchPropertiesID()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT `property_id` FROM `properties` WHERE 1";

    $properties_Id = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $properties_Id;
}
function FetchPropertiesByID($property_Id)
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT 
                    `property_id`, 
                    `property_typology`, 
                    `property_bedrooms`, 
                    `property_bathrooms`, 
                    `property_location`, 
                    `property_phase`, 
                    `type_id`, 
                    `type_data` 
            FROM 
                    `properties` 
            WHERE property_id = $property_Id";
    $property = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $property;
}
function FetchPropertyTypeData($type_id, $type_data_id, $property_Id)
{
    $type_data = "";
    $mysqli = new mysqli("localhost", "root", "", "amron");
    if ($type_id === "2") {
        $query = "SELECT 
                    `rental_id`, 
                    `rental_price`, 
                    `rental_installment`, 
                    `property_id` 
                FROM 
                    `rentals` 
                WHERE 
                    rental_id=$type_data_id 
                AND 
                    property_id=$property_Id ";
        $type_data = mysqli_fetch_assoc(mysqli_query($mysqli, $query));
    }
    if ($type_id === "1") {
        $query = "SELECT 
                    `sale_property_id`, 
                    `sale_property_price`, 
                    `property_id` 
                FROM 
                    `sale_properties` 
                WHERE 
                    sale_property_id= $type_data_id 
                AND 
                    property_id=$property_Id";
        $type_data = mysqli_fetch_assoc(mysqli_query($mysqli, $query));
    }
    return $type_data;
}
