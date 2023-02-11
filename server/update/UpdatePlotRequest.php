<?php
global  $error;
$GLOBALS["error"] = "";



function UpdatePlot(
    $plot_id,
    $plot_house_typology,
    $plot_sale_price,
    $plot_phase,
    $plot_installment,
    $plot_size,
    $plot_location_tags,
    $plot_web_display

) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

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
                    plot_id= $plot_id";

    if (mysqli_query($mysqli, $query)) {
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
