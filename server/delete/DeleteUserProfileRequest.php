<?php
global  $error;
$GLOBALS["error"] = "";



function DeleteUserProfile(
    $user_ID,
    $editor_user_ID
) {
    $mysqli = new mysqli("localhost", "root", "", "amron");

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
