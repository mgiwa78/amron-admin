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
                        <form class="form">
                            <div class="card-body">
                                <div class="form-group row">


                                    <div class="col-lg-6">
                                        <label>Plot Number:</label>
                                        <input type="number" class="form-control" placeholder="Enter contact number">
                                        <span class="form-text text-muted">Please plot number</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Plot Type:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="plot_type" checked="checked" value="2">
                                                <span></span>
                                                For Rent
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="plot_type" value="2">
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
                                            <input type="number" class="form-control" placeholder="Enter Selling Price" />
                                        </div>
                                        <span class="form-text text-muted">Please enter plot price</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Plot lenght size:</label>
                                        <input type="number" class="form-control" placeholder="Lenght">
                                        <span class="form-text text-muted">
                                            Enter lenght size</span>
                                    </div>

                                    <div class="col-lg-3">
                                        <label>Plot breadth Size:</label>
                                        <input type="number" class="form-control" placeholder="Breadth">
                                        <span class="form-text text-muted">
                                            Enter breadth Size </span>

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <input id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...' value='Lugbe, Abuja' />

                                        <div class="mt-3">
                                            <a href="javascript:;" id="kt_tagify_1_remove" class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                                        </div>

                                        <div class="mt-3 text-muted">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Property Location:</label>
                                        <select class="form-control select2" id="kt_select2_1" name="param">
                                            <option value="AK">Phase 1</option>
                                            <option value="HI">Phase 2</option>
                                            <option value="CA">Phase 3</option>
                                            <option value="NV">Phase 4</option>
                                            <option value="OR">Phase 5</option>
                                            <option value="WA">Phase 6</option>
                                            <option value="AZ">Phase 7</option>
                                            <option value="AZ">Not in Phase</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Payment Installment:</label>
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="example_2" checked="checked" value="2">
                                                <span></span>
                                                Monthly
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="example_2" value="2">
                                                <span></span>
                                                Trimonthly
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="example_2" value="2">
                                                <span></span>
                                                Semianually
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="example_2" value="2">
                                                <span></span>
                                                Anually
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Please select installment type</span>
                                    </div>


                                </div>

                                <!-- begin: Example Code-->

                                <!-- end: Example Code-->
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="reset" class="btn btn-primary mr-2">Submit</button>
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