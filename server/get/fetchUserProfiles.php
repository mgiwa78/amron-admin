<?php
include("./db_config.php");

function FetchUserProfileIDs()
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT `user_id` FROM `users` WHERE 1";

    $user_IDs = mysqli_fetch_all(mysqli_query($mysqli, $query));
    return $user_IDs;
}
function FetchUserProfileByID($user_id)
{

    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $query = "SELECT 
                `user_id`, 
                `user_f_name`, 
                `user_l_name`, 
                `user_type_id`, 
                `user_email`, 
                `user_position`,
                `user_last_login`,
                `user_position`,
                `user_password`
            FROM 
             `users` WHERE user_id='$user_id'";

    $userProfile = mysqli_fetch_assoc(mysqli_query($mysqli, $query));

    return $userProfile;
}
