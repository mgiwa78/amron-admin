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

                                    <div class="col-md-4 my-2 my-md-0">
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
                                <th title="Field #7">Status</th>
                                <th title="Field #8">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0006-3629</td>
                                <td>Land Rover</td>
                                <td>Range Rover</td>
                                <td>₦22672.60</td>
                                <td>2016-11-28</td>
                                <td class="text-right">3</td>
                                <td class="text-right">3</td>
                            </tr>
                            <tr>
                                <td>66403-315</td>
                                <td>GMC</td>
                                <td>Jimmy</td>
                                <td>₦55141.29</td>
                                <td>2017-04-29</td>
                                <td class="text-right">3</td>
                                <td class="text-right">2</td>
                            </tr>
                            <tr>
                                <td>54868-5055</td>
                                <td>Ford</td>
                                <td>Club Wagon</td>
                                <td>₦70991.52</td>
                                <td>2017-03-16</td>
                                <td class="text-right">6</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr>
                                <td>44924-112</td>
                                <td>GMC</td>
                                <td>Envoy</td>
                                <td>₦42615.31</td>
                                <td>2016-09-04</td>
                                <td class="text-right">2</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr>
                                <td>0378-0357</td>
                                <td>Saab</td>
                                <td>9-5</td>
                                <td>₦74919.63</td>
                                <td>2017-09-21</td>
                                <td class="text-right">4</td>
                                <td class="text-right">2</td>
                            </tr>
                            <tr>
                                <td>0363-0590</td>
                                <td>Suzuki</td>
                                <td>Grand Vitara</td>
                                <td>₦72908.80</td>
                                <td>2017-04-03</td>
                                <td class="text-right">5</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr>
                                <td>35356-778</td>
                                <td>Dodge</td>
                                <td>Ram 2500</td>
                                <td>₦13569.00</td>
                                <td>2016-03-22</td>
                                <td class="text-right">5</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr>
                                <td>48951-3040</td>
                                <td>Mitsubishi</td>
                                <td>Eclipse</td>
                                <td>₦22471.73</td>
                                <td>2016-04-17</td>
                                <td class="text-right">1</td>
                                <td class="text-right">2</td>
                            </tr>
                            <tr>
                                <td>0487-9801</td>
                                <td>Pontiac</td>
                                <td>Green</td>
                                <td>₦43149.39</td>
                                <td>2016-05-27</td>
                                <td class="text-right">4</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr>
                                <td>54753-003</td>
                                <td>Audi</td>
                                <td>Turquoise</td>
                                <td>₦39286.74</td>
                                <td>2016-07-23</td>
                                <td class="text-right">5</td>
                                <td class="text-right">2</td>
                            </tr>
                            <tr>
                                <td>34460-6006</td>
                                <td>Audi</td>
                                <td>Mauv</td>
                                <td>₦47394.02</td>
                                <td>2016-06-21</td>
                                <td class="text-right">3</td>
                                <td class="text-right">3</td>
                            </tr>
                            <tr>
                                <td>62802-106</td>
                                <td>GMC</td>
                                <td>Teal</td>
                                <td>₦47469.52</td>
                                <td>2016-05-06</td>
                                <td class="text-right">3</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr>
                                <td>43269-664</td>
                                <td>Buick</td>
                                <td>Orange</td>
                                <td>₦94980.73</td>
                                <td>2017-08-17</td>
                                <td class="text-right">3</td>
                                <td class="text-right">1</td>
                            </tr>

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