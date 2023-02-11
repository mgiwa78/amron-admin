<?php
global  $error;
$GLOBALS["error"] = "";



function CreateNewUser(
    $user_ID,
    $user_f_name,
    $user_l_name,
    $user_type,
    $user_email,
    $user_position,
) {




    // $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, $options);
    $mysqli = new mysqli("localhost", "root", "", "amron");

    // Check connection
    // $preQuery = "SELECT `user_email` FROM `users` WHERE user_email='$user_email'";

    // if (mysqli_num_rows(mysqli_query($mysqli, $preQuery))) {
    //     return "Email Exists";
    // } else {
    //     $GLOBALS["error"]  = "Error Occured";
    // }
    $query = "UPDATE 
            `users` 
    SET 
            `user_f_name`='$user_f_name',
            `user_l_name`='$user_l_name',
            `user_type_id`='$user_type',
            `user_email`='$user_email',
            `user_position`='$user_position'
    WHERE 
    user_id='$user_ID'";

    if (mysqli_query($mysqli, $query)) {
        return "Success";
    } else {
        return "Error";
    }
}
