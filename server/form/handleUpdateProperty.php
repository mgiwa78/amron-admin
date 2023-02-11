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



    $property_web_display = 0;
    if (isset($_POST["property_web_display"]))   $_POST["property_web_display"] === "on" ? $property_web_display = 1 : $property_web_display = 0;

    $property_availability = 0;
    if (isset($_POST["property_availability"]))   $_POST["property_availability"] === "on" ? $property_availability = 1 : $property_availability = 0;


    $request = UpdateProperty(
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

    $request = DeleteProperty($property_id, $property_type);
    if ($request === "Success") {

        $_SESSION["action_success"] = "Property Uploaded Successfully";
        header("Location: ../../?action=allProperties");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Property Failed To Uploaded Successfully";
        header("Location: ../../?action=allProperties");
    }
}
