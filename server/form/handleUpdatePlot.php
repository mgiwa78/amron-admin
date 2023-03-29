<?php
session_start();
include("../update/UpdatePlotRequest.php");
include("../delete/DeletePlotRequest.php");

if (isset($_POST["UpdatePlotSubmit"])) {

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
    $plot_id = $_POST["plot_id"];
    $plot_sale_price = $_POST["plot_sale_price"];
    $plot_phase = $_POST["plot_phase"];
    $plot_installment = $_POST["plot_installment"];
    $user_ID = $_POST["user_ID"];
    $plot_size = $_POST["plot_lenght"] . "X" . $_POST["plot_breadth"];

    $plot_location_tags = $plot_location_tags;

    $plot_web_display = 0;
    if (isset($_POST["plot_web_display"]))   $_POST["plot_web_display"] === "on" ? $plot_web_display = 1 : $plot_web_display = 0;



    $request = UpdatePlot(
        $user_ID,
        $plot_id,
        $plot_house_typology,
        $plot_sale_price,
        $plot_phase,
        $plot_installment,
        $plot_size,
        $plot_location_tags,
        $plot_web_display,
    );

    if ($request === "Success") {

        $_SESSION["action_success"] = "Plot Updated Successfully";
        header("Location: ../../?action=ViewPlot&PlotID=$plot_id");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Plot Failed To Update Successfully";
        header("Location: ../../?action=ViewPlot&PlotID=$plot_id");
    }
}
if (isset($_POST["DeletePlot"])) {
    $plot_id = $_POST["plot_id"];
    $user_ID = $_POST["user_ID"];

    $request = DeletePlot($plot_id, $user_ID);
    if ($request === "Success") {

        $_SESSION["action_success"] = "Plot Deleted Successfully";
        header("Location: ../../?action=allPlots");
    }
    if ($request !== "Success") {

        $_SESSION["action_fail"] = "Plot Failed To Delete Successfully";
        header("Location: ../../?action=allPlots");
    }
}
