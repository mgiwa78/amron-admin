<?php

function FetchPropertyCount()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT *
        FROM 
            properties
        WHERE 1";

    $allPropertiesCount = mysqli_num_rows(mysqli_query($mysqli, $query));

    return $allPropertiesCount;
}
function FetchRentCount()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT *
        FROM 
            rentals
        WHERE 1";

    $allRentalsCount = mysqli_num_rows(mysqli_query($mysqli, $query));

    return $allRentalsCount;
}
function FetchSaleCount()
{

    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query = "SELECT *
        FROM 
            sale_properties
        WHERE 1";

    $allSaleCount = mysqli_num_rows(mysqli_query($mysqli, $query));

    return $allSaleCount;
}
