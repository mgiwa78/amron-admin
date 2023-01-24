<?php
session_start();
include("../requests/createNewProperty.php");


if (isset($_POST["createPropertySubmit"])) {

    $property_location_tags = "";
    foreach (json_decode($_POST["property_location"], true)[0] as $param => $value) {
        $property_location_tags = $property_location_tags . $value;
    }

    $property_id = $_POST["property_id"];
    $property_typology = $_POST["property_typology"];
    $property_type = $_POST["property_type"];
    $property_sale_price = $_POST["property_sale_price"];
    $property_rent_price = $_POST["property_rent_price"];
    $property_phase = $_POST["property_phase"];
    $property_rent_installment = $_POST["property_rent_installment"];
    $property_bedroom_amount = $_POST["property_bedroom_amount"];
    $property_bathroom_amount = $_POST["property_bathroom_amount"];

    $request = CreateNewProperty(
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
    echo "yes";
    if ($request === "Success") {

        $_SESSION["action_status"] = "Success";
        header("Location: ../../?action=createProperty");
    }
}
