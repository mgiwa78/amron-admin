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
                        View Property </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Properties </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                All Properties </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                View Property </span>
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
                                Edit property details
                            </h3>

                        </div>

                        <!--begin::Form-->
                        <form enctype="multipart/form-data" id="kt_form_1" class="form" method="POST" action="./server/form/handleUpdateProperty.php">
                            <div class="card-body">
                                <?php
                                include("./components/alertHandler.php");
                                include("./server/get/fetchStaticData.php");
                                include("./server/get/fetchProperties.php");
                                $AllPhaseData = FetchAllPhaseData();
                                $AllTypologiesData = FetchAllPropertyTypologyData();
                                $RentalInstallment = FetchARentalTypes();

                                $Property_ID = $_GET["PropID"];
                                $propertyData = FetchPropertiesByID($Property_ID);
                                $propertyImages = explode("#**#", FetchPropertyImages($Property_ID));
                                // print_r($propertyData);

                                if ($propertyData) {
                                    $propertyTypeData = FetchPropertyTypeData($propertyData["type_id"], $propertyData["type_data"], $Property_ID);

                                    $propTypology = FetchPropertyTypologyByID($propertyData["property_typology"]);
                                }
                                $currentProp_type = $propertyData['property_typology'];
                                // echo "<br>";

                                // print_r($propertyTypeData);
                                // echo "<br>";
                                // print_r($propTypology);

                                ?>

                                <div class="form-group row">

                                    <div class="col-lg-3">
                                        <label>Property ID:</label>
                                        <span class="font-weight-bold"><?php echo $propertyData["property_id"] ?></span>
                                        <input value="<?php echo  $propertyData["property_id"] ?>" name="property_id" type="number" readonly class="form-control" placeholder="ID" />

                                    </div>
                                    <div class="col-lg-3">
                                        <label>Property Data ID:</label>
                                        <input value="<?php echo  $propertyData["type_data"] ?>" name="type_data_id" type="number" readonly class="form-control" placeholder="Data ID" />

                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="user_ID">

                                    <div class="col-lg-6">
                                        <label>Property Typology:</label>
                                        <span class="font-weight-bold"><?php echo $propTypology["type_name"] ?></span>

                                        <select name="property_typology" class="form-control select2" id="kt_select2_2" name="param">
                                            <option value="">All</option>
                                            <?php foreach ($AllTypologiesData as $key => $Typology) {
                                                # code...

                                            ?>
                                                <option <?php echo (int)$currentProp_type === (int)$Typology[1] ? "value='$Typology[1]' selected='selected'" : "value='$Typology[1]'" ?>><?php echo $Typology[0]; ?></option>
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
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Selling Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input value="<?php echo (int)$propertyData['type_id'] === 1 ? $propertyTypeData["sale_property_price"] : "0" ?>" name="property_sale_price" type="number" class="form-control" placeholder="Enter Selling Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter property price</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Rent Price:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input value="<?php echo (int)$propertyData['type_id'] === 2 ? $propertyTypeData["rental_price"] : "0" ?>" name="property_rent_price" type="number" class="form-control" placeholder="Enter Rent Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter rent price</span>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Property Location:</label>

                                        <input name="property_location" id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='<?php echo join(",", explode("#", $propertyData['property_location'])) ?>' data-blacklist='.NET,PHP' />

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
                                                <option <?php echo (int)$propertyData["property_phase"] === (int)$Phase[0] ? "value='$Phase[0]' selected='selected'" : "value='$Phase[0]'" ?>><?php echo $Phase[1]; ?></option>
                                            <?php }
                                            ?>
                                            <option value="0000">Not in Phase</option>

                                        </select>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Rent Installment:</label>
                                        <?php

                                        if ((int)$propertyData["type_id"] === 2) {

                                        ?>
                                            <div class="radio-inline">
                                                <?php foreach ($RentalInstallment as $key => $RentalInstallment) {
                                                    # code...

                                                ?>
                                                    <label class="radio radio-solid">
                                                        <input <?php echo (int)$propertyTypeData["rental_installment"] === (int)$RentalInstallment[0] ? "value='$RentalInstallment[0]' checked" : "" ?> type="radio" name="property_rent_installment" value="<?php echo $RentalInstallment[0] ?>">
                                                        <span></span>
                                                        <?php echo $RentalInstallment[1] ?>
                                                    </label>
                                                <?php } ?>

                                                <label class="radio radio-solid">
                                                    <input type="radio" name="property_rent_installment" value="5">
                                                    <span></span>
                                                    Not Rent
                                                </label>
                                            </div>
                                        <?php
                                        } ?>
                                        <?php
                                        if ((int)$propertyData["type_id"] === 1) {
                                        ?>
                                            <div class="radio-inline">
                                                <?php foreach ($RentalInstallment as $key => $RentalInstallment) {
                                                    # code...

                                                ?>
                                                    <label class="radio radio-solid">
                                                        <input <?php echo  "value='$RentalInstallment[1]' checked" ?> type="radio" name="property_rent_installment" value="<?php echo $RentalInstallment[0] ?>">
                                                        <span></span>
                                                        <?php echo $RentalInstallment[1] ?>
                                                    </label>
                                                <?php } ?>

                                                <label class="radio radio-solid">
                                                    <input type="radio" name="property_rent_installment" checked value="5">
                                                    <span></span>
                                                    Not Rent
                                                </label>
                                            </div>
                                        <?php
                                        } ?>

                                        <span class="form-text text-muted">Please select installment type</span>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>Bedrooms:</label>
                                        <input value="<?php echo $propertyData["property_bedrooms"] ?>" name="property_bedroom_amount" type="number" class="form-control" placeholder="Enter bedrooms number">
                                        <span class="form-text text-muted">Please enter bedrooms number</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Bathrooms:</label>
                                        <input value="<?php echo $propertyData["property_bathrooms"] ?>" name="property_bathroom_amount" type="number" class="form-control" placeholder="Enter bathrooms number">
                                        <span class="form-text text-muted">Please enter bathrooms number</span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Property Type:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input <?php echo (int)$propertyData["type_id"] === 2 ? "value='2' checked" : "value='2'" ?> name="property_type" type="radio"">

                                                <span></span>
                                                For Rent
                                            </label>
                                            <label class=" radio radio-solid">
                                                <input <?php echo (int)$propertyData["type_id"] === 1 ? "value='1' checked" : "value='1'" ?> name="property_type" type="radio"">
                                                <span></span>
                                                For Sale
                                            </label>

                                        </div>
                                        <span class=" form-text text-muted">Please select installment type</span>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="col-12 col-form-label font-weight-bolder">Display On Website:</label>
                                            <div class="col-lg-3">
                                                <span class="switch switch-lg switch-icon">
                                                    <label>
                                                        <input type="checkbox" <?php echo (int)$propertyData["web_display"] === 1 ? "checked" : "" ?> name="property_web_display" />
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="col-12 col-form-label font-weight-bolder">Property Availability:</label>
                                            <div class="col-lg-3">
                                                <span class="switch switch-lg switch-icon">
                                                    <label>
                                                        <input type="checkbox" <?php echo (int)$propertyData["available"] === 1 ? "checked" : "" ?> name="property_availability" />
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="file" name="images[]" multiple />
                                        <input type="submit" name="UploadImage" class="btn btn-primary mr-2" value="Submit">

                                    </div>



                                    <!-- begin: Example Code-->

                                    <!-- end: Example Code-->
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <input type="submit" name="createPropertySubmit" class="btn btn-primary mr-2" value="Submit">

                                            <a href="./?action=allProperties" type="reset" class="btn btn-secondary">Cancel</a>

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
                                                            <input type="submit" name="DeleteProperty" value="Delete" class="btn btn-danger font-weight-bold">
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
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Property Images</h3>
                            </div>

                        </div>
                        <!--begin::Form-->
                        <form id="kt_form_1" class="form" method="POST" action="./server/form/handleUpdateProperty.php">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="form-group row">
                                        <?php

                                        if (count($propertyImages) !== 1) {
                                            foreach ($propertyImages as $key => $propertyImage) {
                                                # code...
                                                if ($key > 0) {

                                        ?>
                                                    <div class="col-lg-2 col-xl-4">
                                                        <div class="image-input image-input-outline" id="kt_image_1">
                                                            <div class="image-input-wrapper" style="background-image: url(images/<?php echo $Property_ID . "/" . $propertyImage ?>)"></div>
                                                            <input type="submit" name="DeletePropertyImage" class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" style="margin-bottom: 2px;" value="x" />
                                                            <input type="text" value="<?php echo $propertyImage ?>" hidden name="image_name" />
                                                            <input type="text" value="<?php echo $Property_ID ?>" hidden name="property_id" />

                                                        </div>
                                                        <span class="form-text text-muted"><?php echo  $propertyImage ?></span>
                                                    </div>
                                            <?php
                                                }
                                            }
                                        } else {
                                            ?>
                                            <div class="text-muted p-15 h5">Not Images Uploaded</div>
                                        <?php
                                        }



                                        ?>

                                    </div>

                                </div>

                                <!--begin::Code-->

                                <!--end::Code-->
                            </div>
                        </form>
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