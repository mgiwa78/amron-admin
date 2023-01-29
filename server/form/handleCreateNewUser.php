<?php
session_start();
include("../post/NewUserRequest.php");
echo "ss";

if (isset($_POST["createNewUserSubmit"])) {

    // $plot_location_tags = "";


    // $tags = json_decode($_POST["property_location"], true);
    // $i = 0;
    // while ($i < count($tags)) {
    //     $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
    //     $i++;
    // }

    $user_ID = $_POST["user_ID"];
    $user_f_name = $_POST["user_f_name"];
    $user_l_name = $_POST["user_l_name"];
    $user_type = $_POST["user_type"];
    $user_email = $_POST["user_email"];
    $user_position = $_POST["user_position"];


    $request = CreateNewUser(
        $user_ID,
        $user_f_name,
        $user_l_name,
        $user_type,
        $user_email,
        $user_position
    );

    if ($request === "Success") {

        $_SESSION["action_success"] = "User Created Successfully";
        header("Location: ../../?action=addUser");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "User Failed To Create Successfully";
        header("Location: ../../?action=addUser");
    }
}
