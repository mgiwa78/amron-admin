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
                        All Payments Profiles </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                        <li class="breadcrumb-item">
                            <span class="text-muted">
                                Payments </span>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="text-muted">
                                Payments Profiles </span>
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

                $allUserIds = FetchUserProfileIDs();
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
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">All Users</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Total <?php echo count($allUserIds) > 1 ? count($allUserIds) . " " . "Users" : count($allUserIds) . " " .  "User" ?> </span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="?action=addUser" class="btn btn-danger font-weight-bolder font-size-sm">Create User</a>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <?php
                    include("./components/alertHandler.php");

                    ?>
                    <div class="tab-content">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                <thead>
                                    <tr class="text-left text-uppercase">
                                        <th style="min-width: 250px" class="pl-7">User name</th>
                                        <th style="min-width: 100px">Email</th>
                                        <th style="min-width: 100px">Last Login</th>
                                        <th style="min-width: 100px">Status</th>
                                        <th style="min-width: 80px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($allUserIds as $key => $UserId) {
                                        # code...
                                        $UserData = FetchUserProfileByID($UserId[0]);
                                        // echo substr($propertyData["property_id"], 3,
                                        //     strlen($propertyData["property_id"])
                                        // );
                                        // print_r($allUserIds);
                                    ?><tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light mr-4">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?php echo $UserData["user_f_name"] . " " . $UserData["user_l_name"] ?></span>
                                                        <span class="text-muted font-weight-bold d-block"><?php echo $UserData["user_position"] ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                    <?php echo $UserData["user_email"] ?>
                                                </span>
                                                <span class="text-muted font-weight-bold">
                                                    Verified
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                    <?php echo $UserData["user_last_login"] ? $UserData["user_last_login"] : "No Login Yet" ?>

                                                </span>
                                                <span class="text-muted font-weight-bold">

                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                    <?php echo $UserData["user_type_id"] === "1" ? "High" : ($UserData["user_type_id"] === "2" ? "Mid" : "Low") ?>

                                                </span>
                                                <span class="text-muted font-weight-bold">
                                                    <?php echo $UserData["user_type_id"] === "4" ? "Super Admin" : ($UserData["user_type_id"] === "1" ? "Admin" : "Editor") ?>
                                                </span>
                                            </td>

                                            <td class="pr-0 text-center">

                                                <a class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" href="?action=ViewUser&UserID=<?php echo $UserId[0] ?>">
                                                    <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span> </a>

                                                <!-- Button trigger modal-->


                                                <!-- Modal-->


                                            </td>
                                        </tr>
                                    <?php
                                    } ?>



                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>