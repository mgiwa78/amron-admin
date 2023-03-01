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
                        Add Property </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Properties </span>
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
                                Enter property details
                            </h3>

                        </div>

                        <!--begin::Form-->
                        <form id="kt_form_1" class="form" method="POST" action="./server/form/handleCreateProperty.php">
                            <div class="card-body">
                                <?php
                                include("./components/alertHandler.php");
                                include("./server/get/fetchStaticData.php");

                                $AllTypologiesData = FetchAllPropertyTypologyData();
                                $AllPhaseData = FetchAllPhaseData();

                                ?>

                                <div class="form-group row">

                                    <div class="col-lg-6">
                                        <label>Property Typology:</label>
                                        <select name="property_typology" class="form-control select2" id="kt_select2_2" name="param">
                                            <option value="">All</option>
                                            <?php foreach ($AllTypologiesData as $key => $Typology) {
                                                # code...

                                            ?>
                                                <option value="<?php echo $Typology[1]; ?>"><?php echo $Typology[0]; ?></option>
                                            <?php }
                                            ?>

                                            <!-- <option value="1">2 Bedroom Detached Bungalow</option> -->
                                            <!-- <option value="2">4 Bedroom with pent house</option>
                                            <option value="3">4 Bedroom Semi-Detached Duplex</option>
                                            <option value="4">5 Bedroom Detached Duplex</option>
                                            <option value="5">2 Bedroom Detached with BQ</option>
                                            <option value="6">3 Bedroom Semi-Detached Bungalow</option>
                                            <option value="7">3 Bedroom Block Of Flat</option>
                                            <option value="8">2 Bedroom Block Of Flat</option>
                                            <option value="9">2 Bedroom Semi-Detached Bungalow</option> -->

                                        </select>
                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="user_ID">

                                    <div class="col-lg-6">
                                        <label>Property Type:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_type" value="2">
                                                <span></span>
                                                For Rent
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_type" value="1">
                                                <span></span>
                                                For Sale
                                            </label>

                                        </div>
                                        <span class="form-text text-muted">Please select installment type</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Selling Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input name="property_sale_price" type="number" class="form-control" placeholder="Enter Selling Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter property price</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Rent Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input name="property_rent_price" type="number" class="form-control" placeholder="Enter Rent Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter rent price</span>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Property Location:</label>

                                        <input name="property_location" id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='Abuja' data-blacklist='.NET,PHP' />

                                        <div class="mt-3">
                                            <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                                        </div>

                                        <div class="mt-3 text-muted">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Property Phase:</label>
                                        <select aria-placeholder="Select Phase" name="property_phase" class="form-control select2" id="kt_select2_1" name="param">
                                            <option value=""></option>

                                            <?php foreach ($AllPhaseData as $key => $Phase) {
                                                # code...

                                            ?>
                                                <option value="<?php echo $Phase[0] ?>"><?php echo $Phase[1]; ?></option>
                                            <?php }
                                            ?>
                                            <option value="0000">Not in Phase</option>

                                        </select>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Rent Installment:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_rent_installment" value="1">
                                                <span></span>
                                                Monthly
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_rent_installment" value="2">
                                                <span></span>
                                                Trimonthly
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_rent_installment" value="3">
                                                <span></span>
                                                Semianually
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_rent_installment" value="4">
                                                <span></span>
                                                Anually
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="property_rent_installment" value="5">
                                                <span></span>
                                                Not Rent
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Please select installment type</span>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>Bedrooms:</label>
                                        <input name="property_bedroom_amount" type="number" class="form-control" placeholder="Enter bedrooms number">
                                        <span class="form-text text-muted">Please enter bedrooms number</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Bathrooms:</label>
                                        <input name="property_bathroom_amount" type="number" class="form-control" placeholder="Enter bathrooms number">
                                        <span class="form-text text-muted">Please enter bathrooms number</span>
                                    </div>

                                </div>

                                <!-- begin: Example Code-->

                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <input type="submit" name="createPropertySubmit" class="btn btn-primary mr-2" value="Submit">
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