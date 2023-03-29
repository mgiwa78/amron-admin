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
                                Enter new plot details
                            </h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" id="add_property_form" method="POST" action="./server/form/handleCreatePlot.php">
                            <div class="card-body">
                                <?php
                                include("./components/alertHandler.php");
                                include("./server/get/fetchStaticData.php");

                                $AllTypologiesData = FetchAllPropertyTypologyData();
                                $AllPhaseData = FetchAllPhaseData();

                                ?>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Payment Installment:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"></span></div>
                                            <input name="plot_installment" type="text" class="form-control" placeholder="Enter Plot Installment" />
                                        </div>
                                        <span class="form-text text-muted">Please select installment type</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Property house Typology:</label>
                                        <select name="plot_house_typology" class="form-control select2" id="kt_select2_2" name="param">
                                            <option value="">All</option>
                                            <?php foreach ($AllTypologiesData as $key => $Typology) {
                                                # code...

                                            ?>
                                                <option value="<?php echo $Typology[1]; ?>"><?php echo $Typology[0]; ?></option>
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
                                            <input name="plot_sale_price" type="number" class="form-control" placeholder="Enter Selling Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter plot price</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Plot lenght size:</label>
                                        <input name="plot_lenght" type="number" class="form-control" placeholder="Lenght">
                                        <span class="form-text text-muted">
                                            Enter lenght size</span>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>Plot breadth Size:</label>
                                        <input name="plot_breadth" type="number" class="form-control" placeholder="Breadth">
                                        <span class="form-text text-muted">
                                            Enter breadth Size </span>

                                    </div>

                                </div>
                                <div class="form-group row">


                                    <div class="col-lg-6"><label>Plot Location:</label>
                                        <input name="plot_location" id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='Lugbe, Abuja' />

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
                                                <option value="<?php echo $Phase[1]; ?>"><?php echo "Phase " . $Phase[0]; ?></option>
                                            <?php }
                                            ?>
                                            <option value="0000">Not in Phase</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">



                                </div>

                                <!-- begin: Example Code-->

                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <input type="submit" name="createPlotSubmit" class="btn btn-primary mr-2" value="Submit">

                                        <button type="reset" class="btn btn-secondary">Cancel</button>
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