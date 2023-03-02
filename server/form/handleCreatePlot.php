<?php
session_start();
// include("../update/UpdateActivityStack.php");
include("../post/NewPlotRequest.php");


if (isset($_POST["createPlotSubmit"])) {
    if ((int)$_SESSION["user_type_id"] === 1) {
        $_SESSION["action_fail"] = "You Do not Have The Permisson For This Action";
        header("Location: ../../?action=addPlot");
    } else {
        $plot_location_tags = "";

        foreach (json_decode($_POST["plot_location"], true) as $param => $value) {
        }

        $tags = json_decode($_POST["plot_location"], true);
        $i = 0;
        while ($i < count($tags)) {
            $plot_location_tags = $plot_location_tags . $tags[$i]["value"] . "#";
            $i++;
        }

        $plot_house_typology = $_POST["plot_house_typology"];
        $plot_sale_price = $_POST["plot_sale_price"];
        $plot_phase = $_POST["plot_phase"];
        $plot_installment = $_POST["plot_installment"];
        $plot_size = $_POST["plot_lenght"] . "X" . $_POST["plot_breadth"];
        $user_id = $_POST["user_ID"];

        $plot_location_tags = $plot_location_tags;

        $request = CreateNewplot(
            $user_id,
            $plot_house_typology,
            $plot_sale_price,
            $plot_phase,
            $plot_installment,
            $plot_size,
            $plot_location_tags,

        );

        if ($request === "Success") {

            $_SESSION["action_success"] = "Plot Uploaded Successfully";
            header("Location: ../../?action=addPlot");
        }
        if ($request !== "Success") {

            $_SESSION["action_fail"] = "Plot Failed To Uploaded Successfully";
            header("Location: ../../?action=addPlot");
        }
    }
}
