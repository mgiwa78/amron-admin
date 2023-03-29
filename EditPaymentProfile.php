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
                        View Payment Profile </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Payment </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                View Payment Profile </span>
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
                                View profile details
                            </h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" id="payment_profile_form" method="POST" action="./server/form/handleUpdatePaymentProfile.php">
                            <div class="card-body">
                                <?php
                                include("./components/alertHandler.php");
                                include("./server/get/fetchStaticData.php");
                                include("./server/get/fetchPaymentProfiles.php");

                                $ProfileID = $_GET["ProfileID"];
                                $AllPhaseData = FetchAllPhaseData();
                                $profileData = FetchPaymentProfileByID($ProfileID);
                                $RentalInstallment = FetchARentalTypes();

                                // print_r($profileData);
                                ?>
                                <div class="form-group row">


                                    <div class="col-lg-4">
                                        <label>Client Payment ID:</label>
                                        <input name="client_payment_id" type="text" value="<?php echo $ProfileID; ?>" readonly class="form-control" placeholder="Enter payment ID">
                                        <span class="form-text text-muted">Please enter payment ID</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Client First Name:</label>
                                        <input value="<?php echo $profileData["client_f_name"]; ?>" name="client_f_name" type="text" class="form-control" placeholder="Enter client first name">
                                        <span class="form-text text-muted">Please enter client first name</span>
                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="user_ID">

                                    <div class="col-lg-4">
                                        <label>Client Last Name:</label>
                                        <input name="client_l_name" value="<?php echo $profileData["client_l_name"]; ?>" type="text" class="form-control" placeholder="Enter client lirst name">
                                        <span class="form-text text-muted">Please enter client last name</span>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Amont To be Paid:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                                            <input name="amount_to_pay" value="<?php echo $profileData["amount_to_pay"]; ?>" type="number" class="form-control" placeholder="Enter amont paid" />
                                        </div>
                                        <span class="form-text text-muted">Please enter total amont paid</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Payment Type:</label>

                                        <div class="radio-inline">
                                            <?php foreach ($RentalInstallment as $key => $RentalInstallment) {
                                                # code...

                                            ?>
                                                <label class="radio radio-solid">
                                                    <input <?php echo (int)$profileData["payment_type"] === (int)$RentalInstallment[0] ? "value='$RentalInstallment[0]' checked" : "" ?> type="radio" name="payment_type" value="<?php echo $RentalInstallment[0] ?>">
                                                    <span></span>
                                                    <?php echo $RentalInstallment[1] ?>
                                                </label>
                                            <?php } ?>


                                        </div>


                                        <span class="form-text text-muted">Payment type</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Profile Property Location:</label>

                                        <input name="property_location" id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='<?php echo join(",", explode("#", $profileData['plot_location_tags'])) ?>' />

                                        <div class="mt-3">
                                            <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                                        </div>

                                        <div class="mt-3 text-muted">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Profile Property Phase:</label>
                                        <select name="property_phase" class="form-control select2" id="kt_select2_1" name="param">
                                            <option value=""></option>

                                            <?php foreach ($AllPhaseData as $key => $Phase) {
                                                # code...

                                            ?>
                                                <option <?php echo (int)$profileData["property_phase"] === (int)$Phase[0] ? "value='$Phase[0]' selected='selected'" : "value='$Phase[0]'" ?>><?php echo $Phase[1]; ?></option>
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
                                        <input type="submit" name="UpdatePaymentProfileSubmit" class="btn btn-primary mr-2" value="Submit">

                                        <a href="./?action=paymentsProfiles" type="reset" class="btn btn-secondary">Cancel</a>
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
                                                        <input type="submit" name="DeletePaymentProfile" value="Delete" class="btn btn-danger font-weight-bold">
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