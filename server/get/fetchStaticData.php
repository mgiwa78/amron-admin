<?php

function FetchPropertyTypologyIDs()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT `typology_id` FROM `property_typology` WHERE 1";

    $typology_IDs = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $typology_IDs;
}
function FetchPropertyTypologyByID($typology_id)
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT 
                    *
            FROM 
                    `property_typology` 
            WHERE typology_id  = $typology_id ";
    $propertytypology = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $propertytypology;
}

function FetchAllPropertyTypologyData()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT 
        `type_name`,
        `typology_id`
        FROM 
            property_typology
        WHERE 1";

    $propertytypology = mysqli_fetch_all(mysqli_query($mysqli, $query));

    return $propertytypology;
}
function FetchAllPhaseData()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT 
        `phase_id`,
        `phase_name`,
        `phase_location`
        
        FROM 
            amron_phases
        WHERE 1";

    $propertytypology = mysqli_fetch_all(mysqli_query($mysqli, $query));

    return $propertytypology;
}
function FetchARentalTypes()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT 
        `rental_installment_id`,
        `rental_installment_type`
        
        FROM 
            rental_installmens
        WHERE 1";

    $rental_installment = mysqli_fetch_all(mysqli_query($mysqli, $query));

    return $rental_installment;
}
