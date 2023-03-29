<?php
include("../update/UpdateActivityStack.php");
include("./db_config.php");

function CreateNewPlot(
    $user_id,
    $plot_house_typology,
    $plot_sale_price,
    $plot_phase,
    $plot_installment,
    $plot_size,
    $plot_location_tags,
) {


    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check connection
    $query = "INSERT INTO 
                `plots`(
                    `plot_size`, 
                    `plot_phase`, 
                    `plot_location`, 
                    `plot_typology`, 
                    `plot_price`,
                    `plot_installment`,
                    `plot_status`,
                    `web_display`
                    ) 
                VALUES (
                    '$plot_size',
                    '$plot_phase',
                    '$plot_location_tags',
                    '$plot_house_typology',
                    '$plot_sale_price',
                    '$plot_installment',
                    '1',                   
                    '1'
                    )";

    if (mysqli_query($mysqli, $query)) {
        $plotID = mysqli_insert_id($mysqli);

        AddNewActivity(
            $user_id,
            "PLOT_CREATION",
            $plotID,
        );
    }
    if (mysqli_query($mysqli, $query))
        return "Success";
    else {
    }
}
