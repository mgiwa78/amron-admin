<?php
include("./db_config.php");

global  $error;
$GLOBALS["error"] = "";



function UpdateUser(
    $editor_user_ID,
    $user_ID,
    $user_f_name,
    $user_l_name,
    $user_type,
    $user_email,
    $user_position,
) {




    // $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, $options);
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli(
        $host,
        $user,
        $pass,
        $db
    );

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
        AddNewActivity(
            $editor_user_ID,
            "USER_PROFILE_MODIFICATION",
            $user_ID,
        );
        return "Success";
    } else {
        return "Error";
    }
}
