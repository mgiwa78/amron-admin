<?php
session_start();
include("../update/UpdatePropertyRequest.php");
include("../delete/DeletePropertyRequest.php");


if (isset($_POST["createPropertySubmit"])) {

    $property_location_tags = "";

    foreach (json_decode($_POST["property_location"], true) as $param => $value) {
    }

    $tags = json_decode($_POST["property_location"], true);
    $i = 0;
    while ($i < count($tags)) {
        $property_location_tags = $property_location_tags . $tags[$i]["value"] . "#";
        $i++;
    }

    $property_typology = $_POST["property_typology"];
    $property_type = $_POST["property_type"];
    $property_sale_price = $_POST["property_sale_price"];
    $property_rent_price = $_POST["property_rent_price"];
    $property_phase = $_POST["property_phase"];
    $property_rent_installment = $_POST["property_rent_installment"];
    $property_bedroom_amount = $_POST["property_bedroom_amount"];
    $property_bathroom_amount = $_POST["property_bathroom_amount"];
    $type_data_id = $_POST["type_data_id"];
    $property_id = $_POST["property_id"];
    $user_ID = $_POST["user_ID"];



    $property_web_display = 0;
    if (isset($_POST["property_web_display"]))   $_POST["property_web_display"] === "on" ? $property_web_display = 1 : $property_web_display = 0;

    $property_availability = 0;
    if (isset($_POST["property_availability"]))   $_POST["property_availability"] === "on" ? $property_availability = 1 : $property_availability = 0;


    $request = UpdateProperty(
        $user_ID,
        $property_id,
        $property_location_tags,
        $property_typology,
        $property_type,
        $property_sale_price,
        $property_rent_price,
        $property_phase,
        $property_rent_installment,
        $property_bedroom_amount,
        $property_bathroom_amount,
        $type_data_id,
        $property_web_display,
        $property_availability
    );


    if ($request === "Success") {

        $_SESSION["action_success"] = "Property Updated Successfully";
        header("Location: ../../?action=ViewProperty&PropID=$property_id");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Property Failed To Update Successfully";
        header("Location: ../../?action=ViewProperty&PropID=$property_id");
    }
}
if (isset($_POST["DeleteProperty"])) {
    $property_id = $_POST["property_id"];
    $property_type = $_POST["property_type"];
    $user_ID = $_POST["user_ID"];

    $request = DeleteProperty($property_id, $property_type, $user_ID);
    if ($request === "Success") {

        $_SESSION["action_success"] = "Property Uploaded Successfully";
        header("Location: ../../?action=allProperties");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Property Failed To Uploaded Successfully";
        header("Location: ../../?action=allProperties");
    }
}
if (isset($_FILES['images'])) {
    if (isset($_POST["DeleteProperty"])) return;
    $property_id = $_POST["property_id"];

    $errors = array();
    $images = $_FILES['images'];
    $count = count($images['name']);

    if ($_FILES['images']["name"][0] !== "") {
        for ($i = 0; $i < $count; $i++) {
            $file_name = $images['name'][$i];
            $file_size = $images['size'][$i];
            $file_tmp = $images['tmp_name'][$i];
            $file_type = $images['type'][$i];

            $file_ext_array = explode('.', $images['name'][$i]);
            $file_ext = strtolower(end($file_ext_array));


            $extensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file." . print_r($_FILES['images']["name"]);
            }

            if ($file_size > 99999999097152) {
                $errors[] = 'File size must be exactly 2 MB';
            }

            if (empty($errors) == true) {

                $dir = "../../images/$property_id";

                if (!is_dir($dir)) {
                    mkdir($dir, 0775, true);
                    move_uploaded_file($file_tmp, "../../images/" .  "$property_id/" .  $file_name);
                } else {

                    move_uploaded_file($file_tmp, "../../images/" .  "$property_id/" . $file_name);
                    UploadPropertyImage($file_name, $property_id);

                    $_SESSION["action_success"] = "Image Uploaded successfully";
                    header("Location: ../../?action=ViewProperty&PropID=$property_id");
                }
            }
        }
    } else {
        $_SESSION["action_fail"] = "No Image Selected";
        header("Location: ../../?action=ViewProperty&PropID=$property_id");
    }
}
if (isset($_POST["DeletePropertyImage"])) {
    $image_name = $_POST["image_name"];
    $property_id = $_POST["property_id"];

    $image_path = "../../images/$property_id/$image_name";
    DeletePropertyImage($image_name, $property_id);
    if (unlink($image_path)) {
        $_SESSION["action_success"] = "Image deleted successfully";
        header("Location: ../../?action=ViewProperty&PropID=$property_id");
    } else {
        $_SESSION["action_fail"] = "Failed to delete the image";
        header("Location: ../../?action=ViewProperty&PropID=$property_id");
    }
}
