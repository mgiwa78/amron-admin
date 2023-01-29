<?php
global  $error;
$GLOBALS["error"] = "";



function CreateNewUser(
    $user_ID,
    $user_f_name,
    $user_l_name,
    $user_type,
    $user_email,
    $user_position
) {


    $mysqli = new mysqli("localhost", "root", "", "amron");

    // Check connection
    $query = "INSERT INTO 
                `users`(
                    `user_id`, 
                    `user_f_name`, 
                    `user_l_name`, 
                    `user_type_id`,
                    `user_email`,
                    `user_position`
                    ) 
                VALUES (
                    '$user_ID',
                    '$user_f_name',
                    '$user_l_name',
                    '$user_type',
                    '$user_email',
                    '$user_position'
                    )";

    if (mysqli_query($mysqli, $query)) {
    } else {
        $GLOBALS["error"]  = "Error Occured";
    }

    if ($GLOBALS["error"]  === "")
        return "Success";
}
