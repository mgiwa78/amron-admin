<?php
include("./db_config.php");

function FetchPlotsID()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT `plot_id` FROM `plots` WHERE 1";

    $plotIDs = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $plotIDs;
}
function FetchPlotByID($plot_id)
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT 
    `plot_id`, 
    `plot_price`, 
    `plot_typology`, 
    `plot_location`, 
    `plot_phase`, 
    `plot_size`, 
    `plot_number`, 
    `plot_installment`,
    `plot_status`,
    `web_display`
    FROM 
    `plots` 
    WHERE plot_id = $plot_id";
    $plot = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $plot;
}
// function FetchPropertyTypeData($type_id, $type_data_id, $property_Id)
// {
//     $type_data = "";
//     $mysqli = new mysqli("localhost", "root", "", "amron");
//     if ($type_id === "2") {
//         $query = "SELECT 
//                     `rental_id`, 
//                     `rental_price`, 
//                     `rental_installment`, 
//                     `property_id` 
//                 FROM 
//                     `rentals` 
//                 WHERE 
//                     rental_id=$type_data_id 
//                 AND 
//                     property_id=$property_Id ";
//         $type_data = mysqli_fetch_assoc(mysqli_query($mysqli, $query));
//     }
//     if ($type_id === "1") {
//         $query = "SELECT 
//                     `sale_property_id`, 
//                     `sale_property_price`, 
//                     `property_id` 
//                 FROM 
//                     `sale_properties` 
//                 WHERE 
//                     sale_property_id= $type_data_id 
//                 AND 
//                     property_id=$property_Id";
//         $type_data = mysqli_fetch_assoc(mysqli_query($mysqli, $query));
//     }
//     return $type_data;
// }
