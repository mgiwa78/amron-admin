<?php
global  $error;
$GLOBALS["error"] = "";



function DeletePlot(
    $plot_id,
    $user_ID,
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query =
        "DELETE FROM 
    `plots` 
    WHERE plot_id = $plot_id";

    if (mysqli_query($mysqli, $query)) {
        AddNewActivity(
            $user_ID,
            "PLOT_DELETION",
            $plot_id,
        );
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
