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
                        Send Mail </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <span href="" class="text-muted">
                                Mail </span>
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
                                Enter Mail Content
                            </h3>

                        </div>

                        <!--begin::Form-->
                        <form id="kt_form_1" class="form" method="POST" action="./server/form/handleCreateProperty.php">
                            <div class="card-body">
                                <?php
                                include("./components/alertHandler.php");
                                ?>
                                <div class="form-group row">

                                    <div class="col-lg-6">
                                        <label>Tenants ID</label>
                                        <select name="tenants_name" class="form-control select2" id="kt_select2_2" name="param">
                                            <option value="">All</option>
                                            <option value="1">2 Bedroom Detached Bungalow</option>
                                            <option value="2">4 Bedroom with pent house</option>
                                            <option value="3">4 Bedroom Semi-Detached Duplex</option>
                                            <option value="4">5 Bedroom Detached Duplex</option>
                                            <option value="5">2 Bedroom Detached with BQ</option>
                                            <option value="6">3 Bedroom Semi-Detached Bungalow</option>
                                            <option value="7">3 Bedroom Block Of Flat</option>
                                            <option value="8">2 Bedroom Block Of Flat</option>
                                            <option value="9">2 Bedroom Semi-Detached Bungalow</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Email Type:</label>
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
                                        <label>Reciever Email:</label>
                                        <input name="reciever_email" type="email" class="form-control" placeholder="Enter Reciever Email">
                                        <span class=" form-text text-muted">Please Enter Reciever Email</span>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Reciever Name:</label>
                                        <input name="user_password" type="text" class="form-control" placeholder="Enter Reciever Name">
                                        <span class=" form-text text-muted">Please Enter Reciever Name</span>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-lg-12">

                                        <label>Email Content</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="6"></textarea>

                                    </div>


                                    <!-- begin: Example Code-->

                                    <!-- end: Example Code-->
                                </div>
                                <div class="card-footer">
                                    <div class="row">
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