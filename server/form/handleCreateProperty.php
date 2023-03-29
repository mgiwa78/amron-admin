<?php
session_start();
include("../post/NewPropertyRequest.php");


if (isset($_POST["createPropertySubmit"])) {
    if ((int)$_SESSION["user_type_id"] === 1) {
        $_SESSION["action_fail"] = "You Do not Have The Permisson For This Action";
        header("Location: ../../?action=createProperty");
    } else {
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
        $user_ID = $_POST["user_ID"];

        $property_location_tags = $property_location_tags;

        $request = CreateNewProperty(
            $user_ID,
            $property_location_tags,
            $property_typology,
            $property_type,
            $property_sale_price,
            $property_rent_price,
            $property_phase,
            $property_rent_installment,
            $property_bedroom_amount,
            $property_bathroom_amount
        );


        if ($request === "Success") {

            $_SESSION["action_success"] = "Property Uploaded Successfully";
            header("Location: ../../?action=createProperty");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "Property Failed To Uploaded Successfully";
            header("Location: ../../?action=createProperty");
        }
    }
}
