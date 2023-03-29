 <?php
    include("../constants/ACTIVITY_TYPES.php");
    include("../../db_config.php");



    function AddNewActivity(
        $user_ID,
        $tack_Typ,
        $activity_data_id
    ) {




        // $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, $options);
        global $host;
        global $user;
        global $pass;
        global $db;

        $mysqli = new mysqli($host, $user, $pass, $db);

        // Check connection
        // $preQuery = "SELECT `user_email` FROM `users` WHERE user_email='$user_email'";

        // if (mysqli_num_rows(mysqli_query($mysqli, $preQuery))) {
        //     return "Email Exists";
        // } else {
        //     $GLOBALS["error"]  = "Error Occured";
        // }
        $now_in_seconds = time();
        $date_created = date("Y-m-d H:i:s");
        # For Property Creation...
        $activityTypeID = ReturnActivityID($tack_Typ);
        $query = "INSERT INTO 
                `ativity_stack`
                    (
                    `activity_by`, 
                    `activity_type`, 
                    `activity_data_id`, 
                    `date_performed`
                    ) 
                VALUES 
                    ('$user_ID',
                    '$activityTypeID',
                    '$activity_data_id',
                    '$date_created')";

        if (mysqli_query($mysqli, $query)) {
            return "Success";
        } else {
            return "Error";
        }
    }







    // switch ($tack_Typ) {
    //     case '0':
    //         # For Property Update...
    //         break;
    //     case '1':
    //         # For Property Creation...

    //         $query = "INSERT INTO 
    //                 `ativity_stack`
    //                     (
    //                     `activity_by`, 
    //                     `activity_type`, 
    //                     `activity_data_id`, 
    //                     `date_performed`
    //                     ) 
    //                 VALUES 
    //                     (
    //                     '$user_ID',
    //                     '$tack_Typ',
    //                     '$activity_data_id',
    //                     '$date_in_words
    //                     ')";

    //         if (mysqli_query($mysqli, $query)) {
    //             return "Success";
    //         } else {
    //             return "Error";
    //         }
    //         break;
    //     case '2':
    //         # For Property Deletion...
    //         break;
    //     case '3':
    //         # For Plot Update...
    //         break;
    //     case '4':
    //         # For Plot Creation...
    //         break;
    //     case '5':
    //         # For Plot Deletion...
    //         break;
    //     case '6':
    //         # For Payment Profile  Update...
    //         break;
    //     case '7':
    //         # For Payment Profile Creation...
    //         break;
    //     case '9':
    //         # For Tenant Update...
    //         break;
    //     case '10':
    //         # For Tenant Creation...
    //         break;
    //     case '11':
    //         # For Tenant Deletion...
    //         break;
    //     case '12':
    //         # For Tenant Update...
    //         break;
    //     case '13':
    //         # For Tenant Creation...
    //         break;
    //     case '14':
    //         # For Tenant Deletion...
    //         break;
    //     case '15':
    //         # For User Update...
    //         break;
    //     case '16':
    //         # For User Creation...
    //         break;
    //     case '17':
    //         # For User Deletion...
    //         break;
    //     case '18':
    //         # For User Login...
    //         break;



    //     default:
    //         # code...
    //         break;
    // } 
