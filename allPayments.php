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
                        All Payments </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                        <li class="breadcrumb-item">
                            <span class="text-muted">
                                Payments </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="text-muted">
                                All Payments </span>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <?php
                include("./components/signInTime.php");
                include("./server/get/fetchPayments.php");

                $all_payments_ids = FetchPaymentIDs();
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
            <!--begin::Notice-->

            <!--end::Notice-->

            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Payments Table
                            <span class="d-block text-muted pt-2 font-size-sm">All Payments data</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->

                        <!--end::Dropdown-->

                        <!--begin::Button-->
                        <a href="?action=recordPayment" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            New Payment
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    include("./components/alertHandler.php");

                    ?>
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span><i class="flaticon2-search-1 text-muted"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4 my-2 my-md-0" style="display: none;">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                            <select class="form-control" id="kt_datatable_search_type">
                                                <option value="">All</option>
                                                <option value="1">Service Charge</option>
                                                <option value="2">Property</option>
                                                <option value="3">Plot</option>
                                                <option value="4">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                                    Search
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->

                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th title="Field #1">Payment ID</th>
                                <th title="Field #2">Client Name</th>
                                <th title="Field #3">Description</th>
                                <th title="Field #4">Amount</th>
                                <th title="Field #5">Date</th>
                                <th title="Field #6">Due</th>
                                <th title="Field #7">Status</th>
                                <th title="Field #8">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_payments_ids as $key => $paymentsID) {
                                # code...
                                $paymentData = FetchPaymentByID($paymentsID[0]);
                                // echo substr($propertyData["property_id"], 3,
                                //     strlen($propertyData["property_id"])
                                // );
                            ?>
                                <tr>
                                    <td><?php echo $paymentData["payment_id"] ?></td>
                                    <td><?php echo $paymentData["client_l_name"] . " " . $paymentData["client_f_name"] ?></td>
                                    <td><?php echo $paymentData["payment_description"] ?></td>
                                    <td><?php echo number_format($paymentData["amount_paid"], 0, '.', ',') ?></td>
                                    <td><?php echo $paymentData["payment_date"] ?></td>
                                    <td><?php echo number_format($paymentData["amount_due"], 0, '.', ',') ?></td>

                                    <td class="text-right"><?php echo $paymentData["amount_due"] === "0" ? 2 : 1 ?></td>
                                    <td class="text-right"><?php echo $paymentData["payment_type"] ?></td>
                                </tr>
                            <?php
                            } ?>



                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>