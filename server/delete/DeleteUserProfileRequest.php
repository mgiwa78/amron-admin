<?php
global  $error;
include("../../db_config.php");
$GLOBALS["error"] = "";





function DeleteUserProfile(
    $user_ID,
    $editor_user_ID
) {
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);


    $query =
        "DELETE FROM 
    `users` 
    WHERE user_id  = '$user_ID'";

    if (mysqli_query($mysqli, $query)) {
        AddNewActivity(
            $editor_user_ID,
            "USER_PROFILE_DELETION",
            $user_ID,
        );
        return "Success";
    }
}
