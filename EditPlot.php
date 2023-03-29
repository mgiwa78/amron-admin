<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Add Plot </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Plots </span>
                        </li>

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <?php
                include("./components/signInTime.php");
                ?>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">
                                View plot details
                            </h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" id="add_property_form" method="POST" action="./server/form/handleUpdatePlot.php">
                            <div class="card-body">
                                <?php
                                include("./server/get/fetchPlots.php");
                                include("./components/alertHandler.php");
                                include("./server/get/fetchStaticData.php");
                                $plotID = $_GET["PlotID"];
                                $AllTypologiesData = FetchAllPropertyTypologyData();

                                $AllPhaseData = FetchAllPhaseData();
                                $plotData = FetchPlotByID($plotID);
                                $plot_Typology = $plotData["plot_typology"];
                                ?>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Payment Installment:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"></span></div>
                                            <input name="plot_installment" value="<?php echo $plotData["plot_installment"] ?>" type="text" class="form-control" placeholder="Enter Plot Installment" />
                                            <input type="hidden" name="plot_id" value="<?php echo $plotData["plot_id"] ?>" type="text" class="form-control" placeholder="" />
                                        </div>
                                        <span class=" form-text text-muted">Please select installment type</span>
                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="user_ID">

                                    <div class="col-lg-6">
                                        <label>Property house Typology:</label>
                                        <select name="plot_house_typology" class="form-control select2" id="kt_select2_2" name="param">
                                            <option value="">All</option>
                                            <?php foreach ($AllTypologiesData as $key => $Typology) {
                                                # code...

                                            ?>
                                                <option <?php echo (int)$plot_Typology === (int)$Typology[1] ? "value='$Typology[1]' selected='selected'" : "value='$Typology[1]'" ?>><?php echo $Typology[0]; ?></option>

                                            <?php }
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Selling Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input value="<?php echo $plotData["plot_price"] ?>" name="plot_sale_price" type="number" class="form-control" placeholder="Enter Selling Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter plot price</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Plot lenght size:</label>
                                        <input value="<?php echo explode("X", $plotData["plot_size"])[0] ?>" name="plot_lenght" type="number" class="form-control" placeholder="Lenght">
                                        <span class="form-text text-muted">
                                            Enter lenght size</span>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>Plot breadth Size:</label>
                                        <input name="plot_breadth" value="<?php echo explode("X", $plotData["plot_size"])[1] ?>" type="number" class="form-control" placeholder="Breadth">
                                        <span class="form-text text-muted">
                                            Enter breadth Size </span>

                                    </div>

                                </div>
                                <div class="form-group row">


                                    <div class="col-lg-6"><label>Plot Location:</label>
                                        <input name="plot_location" id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='<?php echo join(",", explode("#", $plotData['plot_location'])) ?>' />

                                        <div class="mt-3">
                                            <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                                        </div>

                                        <div class="mt-3 text-muted">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Property Phase:</label>
                                        <select name="plot_phase" class="form-control select2" id="kt_select2_1" name="param">
                                            <option value=""></option>

                                            <?php foreach ($AllPhaseData as $key => $Phase) {
                                                # code...

                                            ?>
                                                <option <?php echo (int)$plotData["plot_phase"] === (int)$Phase[0] ? "value='$Phase[0]' selected='selected'" : "value='$Phase[0]'" ?>><?php echo $Phase[1]; ?></option>

                                            <?php }
                                            ?>
                                            <option value="0000">Not in Phase</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label font-weight-bolder">Display On Website:</label>
                                    <div class="col-lg-3">
                                        <span class="switch switch-lg switch-icon">
                                            <label>
                                                <input type="checkbox" <?php echo (int)$plotData["web_display"] === 1 ? "checked" : "" ?> name="plot_web_display" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>

                                <!-- begin: Example Code-->
                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <input type="submit" name="UpdatePlotSubmit" class="btn btn-primary mr-2" value="Submit">

                                        <a href="./?action=allPlots" type="reset" class="btn btn-secondary">Cancel</a>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                                            Delete
                                        </button>
                                        <!-- Button trigger modal-->
                                        <!-- Modal-->
                                        <div class="modal fade " id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content ">
                                                    <div class="modal-header bg-danger ">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Confirm Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="DeletePlot" value="Delete" class="btn btn-danger font-weight-bold">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->

                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>