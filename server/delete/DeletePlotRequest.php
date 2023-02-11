<?php
global  $error;
$GLOBALS["error"] = "";



function DeletePlot(
    $plot_id,
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query =
        "DELETE FROM 
    `plots` 
    WHERE plot_id = $plot_id";

    if (mysqli_query($mysqli, $query)) {
        return "Error";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
