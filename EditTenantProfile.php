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
                        Modify Tenant </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Tenant </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Add Tenant </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                ViewTenant </span>
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
                                Modify Credentials
                            </h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" id="tenant_profile_form" method="POST" action="./server/form/handleUpdateTenantProfile.php">
                            <div class="card-body">
                                <?php

                                include("./components/alertHandler.php");
                                include("./server/get/fetchStaticData.php");
                                include("./server/get/fetchTenantProfiles.php");

                                $RentalInstallment = FetchARentalTypes();
                                $TenentID = $_GET["TenantID"];
                                $AllPhaseData = FetchAllPhaseData();
                                $TenantData = FetchTenantByID($TenentID);

                                ?>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label>Tenant ID:</label>
                                        <input name="tenant_id" type="text" readonly value="<?php echo $TenentID; ?>" class="form-control" placeholder="Enter Tenant ID">
                                        <span class="form-text text-muted">Please tenant ID</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Tenant First Name:</label>
                                        <input value="<?php echo $TenantData["tenant_f_name"]; ?>" name="tenant_f_name" type="text" class="form-control" placeholder="Enter First Name">
                                        <span class=" form-text text-muted">Please Enter First Name</span>
                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="user_ID">

                                    <div class="col-lg-3">
                                        <label>Tenant Last Name:</label>
                                        <input value="<?php echo $TenantData["tenant_l_name"]; ?>" name="tenant_l_name" type="text" class="form-control" placeholder="Enter Last Name">
                                        <span class=" form-text text-muted">Please Enter Last Name</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Property Type:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="tenant_property_type" <?php echo (int)$TenantData["tenant_type_id"] === 1 ? 'checked' : "" ?> value="1">
                                                <span></span>
                                                Rent
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="tenant_property_type" <?php echo (int)$TenantData["tenant_type_id"] === 2 ? 'checked' : "" ?> value="2">
                                                <span></span>
                                                Full Ownership
                                            </label>


                                        </div>
                                        <span class="form-text text-muted">Please select installment type</span>
                                    </div>
                                </div>
                                <div class="form-group row">


                                    <div class="col-lg-6">
                                        <label>Rent Amount:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input value="<?php echo $TenantData["tenant_rental_amount"]; ?>" name="tenant_rent_amount" type="number" class="form-control" placeholder="Enter Rent Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter rent price, if rent</span>

                                    </div>
                                    <div class="col-lg-6">
                                        <label>Rent Installment:</label>
                                        <?php

                                        if ((int)$TenantData["tenant_type_id"] === 1) {

                                        ?>
                                            <div class="radio-inline">
                                                <?php foreach ($RentalInstallment as $key => $RentalInstallment) {
                                                    # code...

                                                ?>
                                                    <label class="radio radio-solid">
                                                        <input <?php echo (int)$TenantData["tenant_rental_installment"] === (int)$RentalInstallment[0] ? "value='$RentalInstallment[0]' checked" : "value='$RentalInstallment[0]'" ?> type="radio" name="rental_installment" value="<?php echo $RentalInstallment[0] ?>">
                                                        <span></span>
                                                        <?php echo $RentalInstallment[1] ?>
                                                    </label>
                                                <?php } ?>


                                            </div>
                                        <?php
                                        } ?>

                                        <span class="form-text text-muted">Please select installment type, if rent</span>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-lg-6"><label>Property Location:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-map-marker icon-lg"></i></span></div>
                                            <input name="property_location" type="text" class="form-control" placeholder="Tenant Location" value='<?php echo $TenantData['tenant_location'] ?>' />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Property Phase:</label>
                                        <select name="property_phase" class="form-control select2" id="kt_select2_1" name="param">
                                            <option value=""></option>

                                            <?php foreach ($AllPhaseData as $key => $Phase) {
                                                # code...

                                            ?>
                                                <option <?php echo (int)$TenantData["tenant_phase_id"] === (int)$Phase[0] ? "value='$Phase[0]' selected='selected'" : "value='$Phase[0]'" ?>><?php echo $Phase[1]; ?></option>
                                            <?php }
                                            ?>
                                            <option value="0000">Not in Phase</option>

                                        </select>
                                    </div>
                                </div>


                                <!-- begin: Example Code-->

                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <input type="submit" name="UpdateTenantProfileSubmit" class="btn btn-primary mr-2" value="Submit">

                                        <a href="./?action=allTenants" type="reset" class="btn btn-secondary">Cancel</a>
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
                                                        <input type="submit" name="DeleteTenantProfile" value="Delete" class="btn btn-danger font-weight-bold">
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