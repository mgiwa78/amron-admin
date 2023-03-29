<?php
include("../../db_config.php");

session_start();
function ConfirmUserEmailPassword($user_email, $password)
{
    global $host;
    global $user;
    global $pass;
    global $db;

    $mysqli = new mysqli($host, $user, $pass, $db);

    $options = [
        'cost' => 12,
    ];

    // $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, $options);
    // $hashed_password = password_hash("Mgiwa2011!", PASSWORD_BCRYPT, $options);




    $emailQuery = "SELECT 
                     `user_id`,
                     `user_f_name`,
                     `user_l_name`,
                     `user_type_id`,
                     `user_email`,
                     `user_position`,
                     `user_last_login`,
                     `user_password`
                FROM 
                    `users` 
                WHERE 
                    user_email='$user_email'";

    if (mysqli_num_rows(mysqli_query($mysqli, $emailQuery))) {

        $now_in_seconds = time();
        $date_in_words = date("F j, Y, g:i a", $now_in_seconds);

        $emailCheckResult = mysqli_fetch_assoc(mysqli_query($mysqli, $emailQuery));
        $userID = $emailCheckResult['user_id'];
        $hashPassword = $emailCheckResult["user_password"];


        if (password_verify($password, $hashPassword)) {

            $setLastLogin =
                "UPDATE 
                `users` 
                SET 
                `user_last_login`='$date_in_words' 
                WHERE 
                user_id='$userID'";

            mysqli_query($mysqli, $setLastLogin);
            return $emailCheckResult;
        } else  return $_SESSION["action_fail"] = "Invalid Password";
    } else
        return $_SESSION["action_fail"] = "Invalid Password";
}



if (isset($_POST["UserSignInAuth"])) {


    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $authRequest = ConfirmUserEmailPassword($user_email, $user_password);
    if ($authRequest) {
        $_SESSION["user_id"] = $authRequest["user_id"];
        $_SESSION["user_f_name"] = $authRequest["user_f_name"];
        $_SESSION["user_l_name"] = $authRequest["user_l_name"];
        $_SESSION["user_type_id"] = $authRequest["user_type_id"];
        $_SESSION["user_position"] = $authRequest["user_position"];
        $_SESSION["user_last_login"] = $authRequest["user_last_login"];
        $_SESSION["user_email"] = $authRequest["user_email"];

        header("Location: ../../");
    } else {
    }
}
