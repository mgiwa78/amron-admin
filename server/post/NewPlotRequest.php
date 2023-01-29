<?php
global  $error;
$GLOBALS["error"] = "";



function CreateNewPlot(
    $plot_number,
    $plot_house_typology,
    $plot_sale_price,
    $plot_phase,
    $plot_installment,
    $plot_size,
    $plot_location_tags
) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

    // Check connection
    $query = "INSERT INTO 
                `plots`(
                    `plot_number`, 
                    `plot_size`, 
                    `plot_phase`, 
                    `plot_location`, 
                    `plot_typology`, 
                    `plot_price`,
                    `plot_installment`) 
                VALUES (
                    '$plot_number',
                    '$plot_size',
                    '$plot_phase',
                    '$plot_location_tags',
                    '$plot_house_typology',
                    '$plot_sale_price',
                    '$plot_installment')";

    if (mysqli_query($mysqli, $query)) {
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
