<?php
global  $error;
$GLOBALS["error"] = "";



function DeleteUserProfile(
    $user_ID,
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

    $query =
        "DELETE FROM 
    `users` 
    WHERE user_id  = '$user_ID'";

    if (mysqli_query($mysqli, $query)) {
        return "Success";
    }
}
