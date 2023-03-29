 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
     <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
         <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
             <!--begin::Info-->
             <div class="d-flex align-items-center flex-wrap mr-1">
                 <!--begin::Page Heading-->
                 <div class="d-flex align-items-baseline flex-wrap mr-5">
                     <!--begin::Page Title-->
                     <h5 class="text-dark font-weight-bold my-1 mr-5">
                         Dashboard
                     </h5>
                     <!--end::Page Title-->

                     <!--begin::Breadcrumb-->
                     <!-- <ul
                      class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm"
                    >
                      <li class="breadcrumb-item">
                        <a href="" class="text-muted"> General </a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="" class="text-muted"> Empty Page </a>
                      </li>
                    </ul> -->
                     <!--end::Breadcrumb-->
                 </div>
                 <!--end::Page Heading-->
             </div>
             <!--end::Info-->

             <!--begin::Toolbar-->
             <?php
                include("./components/signInTime.php");
                ?>
             <!--end::Toolbar-->
         </div>
     </div>
     <!--end::Subheader-->

     <!--begin::Entry-->
     <div class="d-flex flex-column-fluid">
         <!--begin::Container-->
         <div class="container">
             <!--Page content goes here...-->
             <!--Page content goes here...-->
             <!--Page content goes here...-->
             <!--Page content goes here...-->
             <!--Page content goes here...-->
             <!--Page content goes here...-->
             <!--Page content goes here...-->
             <div class="row">
                 <div class="col-xl-4">
                     <!--begin::Stats Widget 25-->
                     <div class="card card-custom bg-light-success card-stretch gutter-b">
                         <!--begin::Body-->
                         <div class="card-body">
                             <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Home.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24" />
                                         <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000" />
                                     </g>
                                 </svg><!--end::Svg Icon--></span>
                             <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?php echo FetchRentCount() ?></span>
                             <span class="font-weight-bold text-muted font-size-lg">
                                 All properties available for Rent</span>
                         </div>
                         <!--end::Body-->
                     </div>
                     <!--end::Stats Widget 25-->
                 </div>

                 <div class="col-xl-4">
                     <!--begin::Stats Widget 27-->
                     <div class="card card-custom bg-light-info card-stretch gutter-b">
                         <!--begin::Body-->
                         <div class="card-body">
                             <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Sale1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24" />
                                         <path d="M16.0322024,5.68722152 L5.75790403,15.945742 C5.12139076,16.5812778 5.12059836,17.6124773 5.75613416,18.2489906 C5.75642891,18.2492858 5.75672377,18.2495809 5.75701875,18.2498759 L5.75701875,18.2498759 C6.39304347,18.8859006 7.42424328,18.8859006 8.060268,18.2498759 C8.06056298,18.2495809 8.06085784,18.2492858 8.0611526,18.2489906 L18.3196731,7.9746922 C18.9505124,7.34288268 18.9501191,6.31942463 18.3187946,5.68810005 L18.3187946,5.68810005 C17.68747,5.05677547 16.6640119,5.05638225 16.0322024,5.68722152 Z" fill="#000000" fill-rule="nonzero" />
                                         <path d="M9.85714286,6.92857143 C9.85714286,8.54730513 8.5469533,9.85714286 6.93006028,9.85714286 C5.31316726,9.85714286 4,8.54730513 4,6.92857143 C4,5.30983773 5.31316726,4 6.93006028,4 C8.5469533,4 9.85714286,5.30983773 9.85714286,6.92857143 Z M20,17.0714286 C20,18.6901623 18.6898104,20 17.0729174,20 C15.4560244,20 14.1428571,18.6901623 14.1428571,17.0714286 C14.1428571,15.4497247 15.4560244,14.1428571 17.0729174,14.1428571 C18.6898104,14.1428571 20,15.4497247 20,17.0714286 Z" fill="#000000" opacity="0.3" />
                                     </g>
                                 </svg><!--end::Svg Icon--></span>
                             <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?php echo FetchSaleCount() ?></span>
                             <span class="font-weight-bold text-muted font-size-lg">All properties available for sale</span>
                         </div>
                         <!--end::Body-->
                     </div>
                     <!--end::Stats Widget 27-->
                 </div>
                 <div class="col-xl-4">
                     <!--begin::Stats Widget 28-->
                     <div class="card card-custom bg-light-warning card-stretch gutter-b">
                         <!--begin::Body-->
                         <div class="card-body">
                             <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Sort3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24" />
                                         <path d="M18.5,6 C19.3284271,6 20,6.67157288 20,7.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 C17.6715729,20 17,19.3284271 17,18.5 L17,7.5 C17,6.67157288 17.6715729,6 18.5,6 Z M12.5,11 C13.3284271,11 14,11.6715729 14,12.5 L14,18.5 C14,19.3284271 13.3284271,20 12.5,20 C11.6715729,20 11,19.3284271 11,18.5 L11,12.5 C11,11.6715729 11.6715729,11 12.5,11 Z M6.5,15 C7.32842712,15 8,15.6715729 8,16.5 L8,18.5 C8,19.3284271 7.32842712,20 6.5,20 C5.67157288,20 5,19.3284271 5,18.5 L5,16.5 C5,15.6715729 5.67157288,15 6.5,15 Z" fill="#000000" />
                                     </g>
                                 </svg><!--end::Svg Icon--></span>
                             <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?php echo FetchPropertyCount() ?></span>
                             <span class="font-weight-bold text-muted font-size-lg">All properties across phases</span>
                         </div>
                         <!--end::Body-->
                     </div>
                     <!--end::Stat: Widget 28-->
                 </div>
             </div>
             <div class="row">
                 <div class="col-xl-6">
                     <!--begin::Base Table Widget 6-->
                     <div class="card card-custom card-stretch gutter-b">
                         <!--begin::Header-->
                         <div class="card-header border-0 pt-5">
                             <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label font-weight-bolder text-dark">Resent Payments</span>
                                 <span class="text-muted mt-3 font-weight-bold font-size-sm">Total 15 payments this week</span>
                             </h3>
                             <div class="card-toolbar">
                                 <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                     <li class="nav-item">
                                         <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_3_1">Month</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_3_2">Week</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_3_3">Day</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <!--end::Header-->

                         <!--begin::Body-->
                         <div class="card-body pt-2 pb-0">
                             <!--begin::Table-->
                             <div class="table-responsive">
                                 <table class="table table-borderless table-vertical-center">
                                     <thead>
                                         <tr>
                                             <th class="p-0" style="width: 50px"></th>
                                             <th class="p-0" style="min-width: 150px"></th>
                                             <th class="p-0" style="min-width: 120px"></th>
                                             <th class="p-0" style="min-width: 70px"></th>
                                             <th class="p-0" style="min-width: 70px"></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td class="pl-0">
                                                 <div class="symbol symbol-50 symbol-light mr-2 mt-2">
                                                     <span class="symbol-label">
                                                         <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                     </span>
                                                 </div>
                                             </td>
                                             <td class="pl-0">
                                                 <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Mrs Obinna</a>
                                                 <span class="text-muted font-weight-bold d-block">Plot Payment</span>
                                             </td>
                                             <td></td>
                                             <td class="text-right">
                                                 <span class="text-muted font-weight-bold d-block font-size-sm">
                                                     Paid
                                                 </span>
                                                 <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                     ₦350,000
                                                 </span>
                                             </td>
                                             <td class="text-right">
                                                 <span class="font-weight-bolder text-primary">
                                                     +28%
                                                 </span>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="pl-0">
                                                 <div class="symbol symbol-50 symbol-light mr-2 mt-2">
                                                     <span class="symbol-label">
                                                         <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
                                                     </span>
                                                 </div>
                                             </td>
                                             <td class="pl-0">
                                                 <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Mr John</a>
                                                 <span class="text-muted font-weight-bold d-block">Property Payment</span>
                                             </td>
                                             <td></td>
                                             <td class="text-right">
                                                 <span class="text-muted font-weight-bold d-block font-size-sm">
                                                     Paid
                                                 </span>
                                                 <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                     ₦90,000
                                                 </span>
                                             </td>
                                             <td class="text-right">
                                                 <span class="font-weight-bolder text-warning">
                                                     +52%
                                                 </span>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="pl-0">
                                                 <div class="symbol symbol-50 symbol-light mr-2 mt-2">
                                                     <span class="symbol-label">
                                                         <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
                                                     </span>
                                                 </div>
                                             </td>
                                             <td class="pl-0">
                                                 <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Mr Peter</a>
                                                 <span class="text-muted font-weight-bold d-block">Rent Payment</span>
                                             </td>
                                             <td></td>
                                             <td class="text-right">
                                                 <span class="text-muted font-weight-bold d-block font-size-sm">
                                                     Paid
                                                 </span>
                                                 <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                     ₦95,000
                                                 </span>
                                             </td>
                                             <td class="text-right">
                                                 <span class="font-weight-bolder text-danger">
                                                     -34%
                                                 </span>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="pl-0">
                                                 <div class="symbol symbol-50 symbol-light mr-2 mt-2">
                                                     <span class="symbol-label">
                                                         <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
                                                     </span>
                                                 </div>
                                             </td>
                                             <td class="pl-0">
                                                 <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Mr Clinton</a>
                                                 <span class="text-muted font-weight-bold d-block">Plot Payment</span>
                                             </td>
                                             <td></td>
                                             <td class="text-right">
                                                 <span class="text-muted font-weight-bold d-block font-size-sm">
                                                     Paid
                                                 </span>
                                                 <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                     ₦150,000
                                                 </span>
                                             </td>
                                             <td class="text-right">
                                                 <span class="font-weight-bolder text-success">
                                                     +48%
                                                 </span>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="pl-0">
                                                 <div class="symbol symbol-50 symbol-light mr-2 mt-2">
                                                     <span class="symbol-label">
                                                         <img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
                                                     </span>
                                                 </div>
                                             </td>
                                             <td class="pl-0">
                                                 <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Mr Abubakar</a>
                                                 <span class="text-muted font-weight-bold d-block">Reant Payment</span>
                                             </td>
                                             <td></td>
                                             <td class="text-right">
                                                 <span class="text-muted font-weight-bold d-block font-size-sm">
                                                     Paid
                                                 </span>
                                                 <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                     50,000
                                                 </span>
                                             </td>
                                             <td class="text-right">
                                                 <span class="font-weight-bolder text-info">
                                                     +100%
                                                 </span>
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <!--end::Table-->
                         </div>
                         <!--end::Body-->
                     </div>
                     <!--end::Base Table Widget 6-->
                 </div>
                 <div class="col-xl-6">
                     <!--begin::List Widget 10-->
                     <div class="card card-custom card-stretch gutter-b">
                         <!--begin::Header-->
                         <div class="card-header border-0">
                             <h3 class="card-title font-weight-bolder text-dark">
                                 Notifications
                             </h3>
                         </div>
                         <!--end::Header-->
                         <!--Page content goes here...-->
                         <!--begin::Body-->
                         <div class="card-body pt-0">
                             <!--begin::Item-->
                             <!--begin::Info-->
                             <?php
                                $ActivitiesID = ActivityStack();
                                ?>
                             <?php
                                foreach ($ActivitiesID as $key => $activity) {
                                    $typeColour = array(0 => "primary", 1 => "success", 2 => "dark", 3 => "warning", 4 => "info");
                                    $activityData = ActivityStackByID($activity[0]);
                                    $performedByName = FetchUserProfileByID($activityData['activity_by']);

                                    $parsedActivity = parseActivity(
                                        $activityData
                                    );
                                    // $activityData = parseActivity(
                                    //     $activity_data_id,
                                    //     $date_performed,
                                    //     $activity_by,
                                    //     $activity_type,
                                    //     $activity_id
                                    // );

                                ?>
                                 <div class="mb-6">
                                     <!--begin::Content-->
                                     <div class="d-flex align-items-center flex-grow-1">
                                         <!--begin::Checkbox-->
                                         <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                             <input type="checkbox" checked disabled value="0" />
                                             <span></span>
                                         </label>
                                         <!--end::Checkbox-->

                                         <!--begin::Section-->
                                         <div class="d-flex flex-wrap align-items-center justify-content-between w-100">

                                             <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                 <!--begin::Title-->
                                                 <span class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">
                                                     <?php echo $parsedActivity[0] ?>
                                                 </span>
                                                 <!--end::Title-->

                                                 <!--begin::Data-->
                                                 <span class="text-muted  font-weight-bolder">
                                                     By <?php echo $performedByName['user_l_name']; ?>

                                                 </span>
                                                 <span class="text-muted font-weight-bold">
                                                     2 Days ago
                                                 </span>

                                                 <!--end::Data-->

                                             </div>
                                             <span class="label label-lg label-light-<?php echo $typeColour[$parsedActivity[1]] ?> label-inline font-weight-bold py-4"><?php echo $parsedActivity[2] ?></span>

                                         </div>
                                         <!--end::Section-->
                                     </div>
                                     <!--end::Content-->
                                 </div>
                             <?php
                                }
                                ?>

                             <!--end::Info-->

                             <!--begin::Label-->
                             <!--end::Label-->

                             <!--end::Item-->

                             <!--begin::Item-->

                             <!--end: Item-->
                         </div>
                         <!--end: Card Body-->
                     </div>
                     <!--end: Card-->
                     <!--end: List Widget 10-->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--end::Container-->