<?php
include("../../db_config.php");

global  $error;
$GLOBALS["error"] = "";



function DeletePlot(
    $plot_id,
    $user_ID,
) {
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

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
