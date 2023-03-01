<?php
session_start();
include("../update/UpdateUserRequest.php");
include("../delete/DeleteUserProfileRequest.php");

if (isset($_POST["UpdateUserSubmit"])) {

    // $plot_location_tags = "";
    // $tags = json_decode($_POST["property_location"], true);
    // $i = 0;
    // while ($i < count($tags)) {
    //     $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
    //     $i++;
    // }
    if ((int)$_SESSION["user_type_id"] === 0) {
        $_SESSION["action_fail"] = "You Do not Have The Permisson For This Action";
        header("Location: ../../?action=createPaymentsProfile");
    } else {
        $user_ID = $_POST["user_ID"];
        $editor_user_ID = $_POST["editor_user_ID"];
        $user_f_name = $_POST["user_f_name"];
        $user_l_name = $_POST["user_l_name"];
        $user_type = $_POST["user_type"];
        $user_email = $_POST["user_email"];
        $user_position = $_POST["user_position"];


        $request = UpdateUser(
            $editor_user_ID,
            $user_ID,
            $user_f_name,
            $user_l_name,
            $user_type,
            $user_email,
            $user_position,
        );
        echo $request;

        if ($request === "Success") {

            $_SESSION["action_success"] = "User Updated Successfully";
            header("Location: ../../?action=ViewUser&UserID=$user_ID");
        }
        if ($request === "Error") {

            $_SESSION["action_fail"] = "User Failed To Update Successfully";
            header("Location: ../../?action=ViewUser&UserID=$user_ID");
        }
        if ($request === "Email Exists") {
            $_SESSION["action_fail"] = "Email Already Exists, Use a different email";
            header("Location: ../../?action=ViewUser&UserID=$user_ID");
        }
    }

    if (isset($_POST["DeleteUser"])) {

        $user_ID = $_POST["user_ID"];

        $request = DeleteUserProfile($user_ID, $editor_user_ID);
        if ($request === "Success") {

            $_SESSION["action_success"] = "User Deleted Successfully";
            header("Location: ../../?action=allUsers");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "User Failed To Delete Successfully";
            header("Location: ../../?action=allUsers");
        }
    }
}
