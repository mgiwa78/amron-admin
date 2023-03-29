<?php

include("../update/UpdateActivityStack.php");
include("./db_config.php");


global  $error;
$GLOBALS["error"] = "";



function UpdatePlot(
    $user_ID,
    $plot_id,
    $plot_house_typology,
    $plot_sale_price,
    $plot_phase,
    $plot_installment,
    $plot_size,
    $plot_location_tags,
    $plot_web_display

) {


    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check connection

    $query = "UPDATE 
                    `plots` 
                SET 
                    `plot_price`='$plot_sale_price',
                    `plot_typology`='$plot_house_typology',
                    `plot_location`='$plot_location_tags',
                    `plot_phase`='$plot_phase',
                    `plot_size`='$plot_size',
                    `plot_installment`='$plot_installment',
                    `plot_status`='Available',
                    `web_display`='$plot_web_display'
                WHERE 
                    plot_id= '$plot_id'";

    if (mysqli_query($mysqli, $query)) {
        AddNewActivity(
            $user_ID,
            "PLOT_MODIFICATION",
            $plot_id,
        );
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
