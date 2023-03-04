<?php
session_start();
include("./utils/confirmLogin.php");
include("./server/get/fetchDashBoardData.php");
include("./server/get/fetchUserProfiles.php");

?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
  <base href="./" />
  <meta charset="utf-8" />
  <title>Amron</title>
  <meta name="description" content="Amron Global Services" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->

  <!--begin::Page Vendors Styles(used by this page)-->
  <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <!--end::Page Vendors Styles-->

  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <!--end::Global Theme Styles-->

  <!--begin::Layout Themes(used by all pages)-->

  <link href="assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <link href="assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <!--end::Layout Themes-->

  <link rel="shortcut icon" href="assets/media/favicon/favicon-32x32.png" />
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->
  <!--begin::Header Mobile-->
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="#">
      <img alt="Logo" style="width: 180px; margin-left: -39px" src="assets/media/AMRON Global Services/Without Background/Horizontal Logo/AMRON Horizontal White.png" />

    </a>
    <!--end::Logo-->

    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
      <!--begin::Aside Mobile Toggle-->
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>
      <!--end::Aside Mobile Toggle-->

      <!--begin::Header Menu Mobile Toggle-->
      <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
        <span></span>
      </button>
      <!--end::Header Menu Mobile Toggle-->

      <!--begin::Topbar Mobile Toggle-->
      <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
        <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24" />
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
            </g>
          </svg><!--end::Svg Icon--></span>
      </button>
      <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
  </div>
  <!--end::Header Mobile-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
      <!--begin::Aside-->
      <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        <!--begin::Brand-->
        <div class="brand flex-column-auto" id="kt_brand">
          <!--begin::Logo-->
          <a href="#" class="brand-logo">
            <img alt="Logo" style="width: 200px; margin-left: -39px" src="assets/media/AMRON Global Services/Without Background/Horizontal Logo/AMRON Horizontal White.png" />
          </a>
          <!--end::Logo-->

          <!--begin::Toggle-->
          <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                  <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                </g>
              </svg><!--end::Svg Icon--></span>
          </button>
          <!--end::Toolbar-->
        </div>
        <!--end::Brand-->

        <!--begin::Aside Menu-->
        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
          <!--begin::Menu Container-->
          <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
              <li class="menu-item" aria-haspopup="true">
                <a href="?action=dashboard" class="menu-link"><i class="menu-icon flaticon-home"></i><span class="menu-text">Dashboard</span></a>
              </li>
              <li class="menu-section">
                <h4 class="menu-text">Menu</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
              </li>

              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-buildings"></i><span class="menu-text">Properties</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link"><span class="menu-text">Properties</span></span>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=createProperty" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Create New Property</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=allProperties" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Properties</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-map-location"></i><span class="menu-text">Plots</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link"><span class="menu-text">Plots</span></span>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=addPlot" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Plot</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=allPlots" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Plots</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-interface-9"></i><span class="menu-text">Payments</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link"><span class="menu-text">Payments</span></span>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=allPayments" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Payments</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=recordPayment" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Record Payment</span></a>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=paymentsProfiles" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Payment Profiles</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=createPaymentsProfile" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Create Payment Profile</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-user-ok"></i><span class="menu-text">Tenants</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link"><span class="menu-text">Tenants</span></span>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=allTenants" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Tenant Profiles</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=addTenants" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New Tenant</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-users"></i><span class="menu-text">Users</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link"><span class="menu-text">Users</span></span>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=allUsers" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">User Profiles</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=addUser" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Add New User</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon-mail-1"></i><span class="menu-text">Mail</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link"><span class="menu-text">Mail</span></span>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=allMails" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">All Mail</span></a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                      <a href="?action=sendMail" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Send Mail</span></a>
                    </li>

                  </ul>
                </div>
              </li>
            </ul>
            <!--end::Menu Nav-->
          </div>
          <!--end::Menu Container-->
        </div>
        <!--end::Aside Menu-->
      </div>
      <!--end::Aside-->

      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header header-fixed">
          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
              <!--begin::Header Menu-->
              <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                  <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
                    <span class=""><span class="font-weight-bold font-size-h5">Amron Admin</span><i class="menu-arrow"></i></span>
                  </li>
                </ul>
                <!--end::Header Nav-->
              </div>
              <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->

            <!--begin::Topbar-->
            <div class="topbar">
              <!--begin::Search-->

              <!--end::Search-->

              <!--begin::Notifications-->

              <!--end::Notifications-->

              <!--begin::Quick Actions-->
              <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                  <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                    <span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                          <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                          <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                          <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                        </g>
                      </svg><!--end::Svg Icon--></span>
                  </div>
                </div>
                <!--end::Toggle-->

                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                  <!--begin:Header-->
                  <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                    <h4 class="text-white font-weight-bold">Quick Actions</h4>
                  </div>
                  <!--end:Header-->

                  <!--begin:Nav-->
                  <div class="row row-paddingless">
                    <!--begin:Item-->
                    <div class="col-6">
                      <a href="?action=createProperty" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
                        <span class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Home.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000" />
                            </g>
                          </svg><!--end::Svg Icon--></span>
                        <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Properties</span>
                        <span class="d-block text-dark-50 font-size-lg">Create Property</span>
                      </a>
                    </div>
                    <!--end:Item-->

                    <!--begin:Item-->
                    <div class="col-6">
                      <a href="?action=addPlot" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
                        <span class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Layout\Layout-arrange.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000" />
                              <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3" />
                            </g>
                          </svg><!--end::Svg Icon--></span>
                        <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Plot</span>
                        <span class="d-block text-dark-50 font-size-lg">Add New Plot</span>
                      </a>
                    </div>
                    <!--end:Item-->

                    <!--begin:Item-->
                    <div class="col-6">
                      <a href="?action=recordPayment" class="d-block py-10 px-5 text-center bg-hover-light border-right">
                        <span class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Safe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path d="M6.5,16 L7.5,16 C8.32842712,16 9,16.6715729 9,17.5 L9,19.5 C9,20.3284271 8.32842712,21 7.5,21 L6.5,21 C5.67157288,21 5,20.3284271 5,19.5 L5,17.5 C5,16.6715729 5.67157288,16 6.5,16 Z M16.5,16 L17.5,16 C18.3284271,16 19,16.6715729 19,17.5 L19,19.5 C19,20.3284271 18.3284271,21 17.5,21 L16.5,21 C15.6715729,21 15,20.3284271 15,19.5 L15,17.5 C15,16.6715729 15.6715729,16 16.5,16 Z" fill="#000000" opacity="0.3" />
                              <path d="M5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6 C3,4.8954305 3.8954305,4 5,4 Z M15.5,15 C17.4329966,15 19,13.4329966 19,11.5 C19,9.56700338 17.4329966,8 15.5,8 C13.5670034,8 12,9.56700338 12,11.5 C12,13.4329966 13.5670034,15 15.5,15 Z M15.5,13 C16.3284271,13 17,12.3284271 17,11.5 C17,10.6715729 16.3284271,10 15.5,10 C14.6715729,10 14,10.6715729 14,11.5 C14,12.3284271 14.6715729,13 15.5,13 Z M7,8 L7,8 C7.55228475,8 8,8.44771525 8,9 L8,11 C8,11.5522847 7.55228475,12 7,12 L7,12 C6.44771525,12 6,11.5522847 6,11 L6,9 C6,8.44771525 6.44771525,8 7,8 Z" fill="#000000" />
                            </g>
                          </svg><!--end::Svg Icon--></span>
                        <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Payment</span>
                        <span class="d-block text-dark-50 font-size-lg">Record New Payment</span>
                      </a>
                    </div>
                    <!--end:Item-->

                    <!--begin:Item-->
                    <div class="col-6">
                      <a href="?action=addTenants" class="d-block py-10 px-5 text-center bg-hover-light">

                        <span class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Add-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                          </svg><!--end::Svg Icon--></span>
                        <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Tenants</span>
                        <span class="d-block text-dark-50 font-size-lg">Add New tennat</span>
                      </a>
                    </div>
                    <!--end:Item-->
                  </div>
                  <!--end:Nav-->
                </div>
                <!--end::Dropdown-->
              </div>
              <!--end::Quick Actions-->

              <!--begin::Cart-->

              <!--end::Cart-->

              <!--begin::Quick panel-->
              <div class="topbar-item">
                <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
                  <span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                      </g>
                    </svg><!--end::Svg Icon--></span>
                </div>
              </div>
              <!--end::Quick panel-->

              <!--begin::Chat-->
              <!-- <div class="topbar-item">
                <div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal" data-target="#kt_chat_modal">
                  <span class="svg-icon svg-icon-xl svg-icon-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                      </g>
                    </svg>
                  </span>
                </div>
              </div> -->
              <!--end::Chat-->

              <!--begin::Languages-->

              <!--end::Languages-->

              <!--begin::User-->
              <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                  <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                  <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo $_SESSION["user_l_name"] . " " . $_SESSION["user_f_name"] ?></span>
                  <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                  </span>
                </div>
              </div>
              <!--end::User-->
            </div>
            <!--end::Topbar-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->

        <!--begin::Content-->

        <!--begin::Subheader-->
        <?php


        if (isset($_GET["action"])) {
          $action = $_GET["action"];

          switch ($action) {
            case 'dashboard':
              include("dashboard.php");
              break;
            case 'createProperty':
              include("createNewProperty.php");
              break;
            case 'allProperties':
              include("allProperties.php");
              break;
            case 'ViewProperty':
              include("propertyDisplay.php");
              break;
              ////
              ////
            case 'addPlot':
              include("addNewPlot.php");
              break;
            case 'allPlots':
              include("allPlots.php");
              break;
            case 'ViewPlot':
              include("EditPlot.php");
              break;
              ////
              ////
            case 'recordPayment':
              include("recordNewPayment.php");
              break;
            case 'allPayments':
              include("allPayments.php");
              break;
            case 'createPaymentsProfile':
              include("createPaymentProfile.php");
              break;
            case 'paymentsProfiles':
              include("allPaymentProfiles.php");
              break;
            case 'paymentProfileData':
              include("paymentProfileData.php");
              break;
            case 'ViewPaymentProfile':
              include("EditPaymentProfile.php");
              break;
              ////
              ////
            case 'allTenants':
              include("allTenantProfile.php");
              break;
            case 'addTenants':
              include("createNewTenantProfile.php");
              break;
            case 'ViewTenants':
              include("EditTenantProfile.php");
              break;
              ////
              ////
            case 'allUsers':
              include("allUsers.php");
              break;
            case 'addUser':
              include("createNewUser.php");
              break;
            case 'ViewUser':
              include("EditUser.php");
              break;
              ////
              ////
            case 'allMails':
              include("allMails.php");
              break;
            case 'sendMail':
              include("sendMail.php");
              break;
          }
        } else {
          include("dashboard.php");
        }

        ?>
        <!--end::Entry-->
        <!--end::Content-->

        <!--begin::Footer-->
        <?php
        include("components/footer.php") ?>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Main-->

  <!-- begin::User Panel-->
  <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
      <h3 class="font-weight-bold m-0">
        User Profile
      </h3>
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
        <i class="ki ki-close icon-xs text-muted"></i>
      </a>
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
      <!--begin::Header-->
      <div class="d-flex align-items-center mt-5">
        <div class="symbol symbol-100 mr-5">
          <div class="symbol-label" style="background-image: url('assets/media/users/blank.png')"></div>
          <i class="symbol-badge bg-success"></i>
        </div>
        <div class="d-flex flex-column">
          <span class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
            <?php echo $_SESSION["user_l_name"] . " " . $_SESSION["user_f_name"] ?>
          </span>
          <div class="text-muted mt-1"><?php echo $_SESSION["user_position"] ?> </div>
          <div class="navi mt-2">
            <span>
              <span class="navi-link p-0 pb-2">
                <span class="navi-icon mr-1">
                  <span class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                      </g>
                    </svg><!--end::Svg Icon--></span>
                </span>
                <span class="navi-text text-muted text-hover-primary"><?php echo $_SESSION["user_email"] ?></span>
              </span>
            </span>
            <form action="./utils/handleUserSignOut.php" method="POST">
              <input type="submit" name="SignUserOut" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" value="Sign Out">
            </form>
          </div>
        </div>
      </div>
      <!--end::Header-->

      <!--begin::Separator-->
      <div class="separator separator-dashed mt-8 mb-5"></div>
      <!--end::Separator-->

      <!--begin::Nav-->

      <!--end::Nav-->


      <!--end::Notifications-->
    </div>
    <!--end::Content-->
  </div>
  <!-- end::User Panel-->

  <!--begin::Quick Cart-->

  <!--end::Quick Cart-->

  <!--begin::Quick Panel-->
  <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
    <!--begin::Header-->
    <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
      <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_notifications">Actions</a>
        </li>
      </ul>

      <div class="offcanvas-close mt-n1 pr-5">
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
          <i class="ki ki-close icon-xs text-muted"></i>
        </a>
      </div>
    </div>

    <!--end::Header-->

    <!--begin::Content-->
    <div class="offcanvas-content px-10">
      <div class="tab-content">
        <!--begin::Tabpane-->

        <!--end::Tabpane-->

        <!--begin::Tabpane-->
        <div class="tab-pane fade show pt-2 pr-5 mr-n5 active" id="kt_quick_panel_notifications" role="tabpanel">
          <!--begin::Nav-->
          <div class="navi navi-icon-circle navi-spacer-x-0">
            <?php

            $ActivitiesID = AllActivityStack();
            if ($ActivitiesID) {
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
                <div href="#" class="navi-item">
                  <div class="navi-link rounded">
                    <div class="symbol symbol-50 mr-3">
                      <div class="symbol-label">
                        <?php if ($parsedActivity[1] === 0) {
                        ?>
                          <span class="svg-icon svg-icon-3x svg-icon-success">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000" />
                              </g>
                            </svg></span>
                        <?php
                        }

                        if ($parsedActivity[1] === 1) {
                        ?><span class="svg-icon svg-icon-3x svg-icon-success">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6.5,16 L7.5,16 C8.32842712,16 9,16.6715729 9,17.5 L9,19.5 C9,20.3284271 8.32842712,21 7.5,21 L6.5,21 C5.67157288,21 5,20.3284271 5,19.5 L5,17.5 C5,16.6715729 5.67157288,16 6.5,16 Z M16.5,16 L17.5,16 C18.3284271,16 19,16.6715729 19,17.5 L19,19.5 C19,20.3284271 18.3284271,21 17.5,21 L16.5,21 C15.6715729,21 15,20.3284271 15,19.5 L15,17.5 C15,16.6715729 15.6715729,16 16.5,16 Z" fill="#000000" opacity="0.3" />
                                <path d="M5,4 L19,4 C20.1045695,4 21,4.8954305 21,6 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6 C3,4.8954305 3.8954305,4 5,4 Z M15.5,15 C17.4329966,15 19,13.4329966 19,11.5 C19,9.56700338 17.4329966,8 15.5,8 C13.5670034,8 12,9.56700338 12,11.5 C12,13.4329966 13.5670034,15 15.5,15 Z M15.5,13 C16.3284271,13 17,12.3284271 17,11.5 C17,10.6715729 16.3284271,10 15.5,10 C14.6715729,10 14,10.6715729 14,11.5 C14,12.3284271 14.6715729,13 15.5,13 Z M7,8 L7,8 C7.55228475,8 8,8.44771525 8,9 L8,11 C8,11.5522847 7.55228475,12 7,12 L7,12 C6.44771525,12 6,11.5522847 6,11 L6,9 C6,8.44771525 6.44771525,8 7,8 Z" fill="#000000" />
                              </g>
                            </svg></span>
                        <?php

                        }
                        if ($parsedActivity[1] === 2) {
                        ?>
                          <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg></span>
                        <?php
                        }
                        if ($parsedActivity[1] === 3) {
                        ?> <span class="svg-icon svg-icon-3x svg-icon-success">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000" />
                                <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg></span>
                        <?php
                        }
                        if ($parsedActivity[1] === 4) {
                        ?><span class="svg-icon svg-icon-3x svg-icon-success">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                              </g>
                            </svg></span>
                        <?php
                        }
                        ?>

                      </div>

                    </div>
                    <div class="navi-text">
                      <div class="font-weight-bold font-size-lg">
                        <?php echo $parsedActivity[0] ?>

                      </div>
                      <div class="text-muted"><?php echo $performedByName['user_l_name'] ?></div>
                    </div>
                  </div>
                </div>
              <?php
              }
            } else {
              ?>
              <h4>No Activities</h4>
            <?php
            }
            ?>

            <!--begin::Item-->

            <!--end::Item-->
            <!--begin::Item-->

            <!--end::Item-->
          </div>
          <!--end::Nav-->
        </div>
        <!--end::Tabpane-->

        <!--begin::Tabpane-->

        <!--end::Tabpane-->
      </div>
    </div>
    <!--end::Content-->
  </div>
  <!--end::Quick Panel-->

  <!--begin::Chat Panel-->
  <!-- <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="card card-custom">
          <div class="card-header align-items-center px-4 py-3">
            <div class="text-left flex-grow-1">
              <div class="dropdown dropdown-inline">
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="svg-icon svg-icon-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                      </g>
                    </svg>
                  </span>
                </button>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                  <ul class="navi navi-hover py-5">
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                        <span class="navi-text">New Group</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                        <span class="navi-text">Contacts</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                        <span class="navi-text">Groups</span>
                        <span class="navi-link-badge">
                          <span class="label label-light-primary label-inline font-weight-bold">new</span>
                        </span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                        <span class="navi-text">Calls</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                        <span class="navi-text">Settings</span>
                      </a>
                    </li>

                    <li class="navi-separator my-3"></li>

                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                        <span class="navi-text">Help</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                        <span class="navi-text">Privacy</span>
                        <span class="navi-link-badge">
                          <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="text-center flex-grow-1">
              <div class="text-dark-75 font-weight-bold font-size-h5">
                Matt Pears
              </div>
              <div>
                <span class="label label-dot label-success"></span>
                <span class="font-weight-bold text-muted font-size-sm">Active</span>
              </div>
            </div>
            <div class="text-right flex-grow-1">
              <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                <i class="ki ki-close icon-1x"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
              <div class="messages">
                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/media/users/300_12.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">2 Hours</span>
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    How likely are you to recommend our company to your
                    friends and family?
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">3 minutes</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    Hey there, we’re just writing to let you know that you’ve
                    been subscribed to a repository on GitHub.
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/media/users/300_21.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">40 seconds</span>
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    Ok, Understood!
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">Just now</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    You’ll receive notifications for all issues, pull
                    requests!
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/media/users/300_12.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">40 seconds</span>
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    You can unwatch this repository immediately by clicking
                    here: <a href="#">https://github.com</a>
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">Just now</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    Discover what students who viewed Learn Figma - UI/UX
                    Design. Essential Training also viewed
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-start">
                  <div class="d-flex align-items-center">
                    <div class="symbol symbol-circle symbol-40 mr-3">
                      <img alt="Pic" src="assets/media/users/300_12.jpg" />
                    </div>
                    <div>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                      <span class="text-muted font-size-sm">40 seconds</span>
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                    Most purchased Business courses during this sale!
                  </div>
                </div>

                <div class="d-flex flex-column mb-5 align-items-end">
                  <div class="d-flex align-items-center">
                    <div>
                      <span class="text-muted font-size-sm">Just now</span>
                      <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                    </div>
                    <div class="symbol symbol-circle symbol-40 ml-3">
                      <img alt="Pic" src="assets/media/users/300_21.jpg" />
                    </div>
                  </div>
                  <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                    Company BBQ to celebrate the last quater achievements and
                    goals. Food and drinks provided
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-footer align-items-center">
            <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
            <div class="d-flex align-items-center justify-content-between mt-5">
              <div class="mr-3">
                <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera icon-lg"></i></a>
              </div>
              <div>
                <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                  Send
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--end::Chat Panel-->

  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24" />
          <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
          <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
        </g>
      </svg><!--end::Svg Icon--></span>
  </div>
  <!--end::Scrolltop-->

  <!--begin::Sticky Toolbar-->

  <!--end::Sticky Toolbar-->
  <!--begin::Demo Panel-->

  <!--end::Demo Panel-->

  <script>
    var HOST_URL =
      "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
  </script>
  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = {
      breakpoints: {
        sm: 576,
        md: 768,
        lg: 992,
        xl: 1200,
        xxl: 1400,
      },
      colors: {
        theme: {
          base: {
            white: "#ffffff",
            primary: "#3699FF",
            secondary: "#E5EAEE",
            success: "#1BC5BD",
            info: "#8950FC",
            warning: "#FFA800",
            danger: "#F64E60",
            light: "#E4E6EF",
            dark: "#181C32",
          },
          light: {
            white: "#ffffff",
            primary: "#E1F0FF",
            secondary: "#EBEDF3",
            success: "#C9F7F5",
            info: "#EEE5FF",
            warning: "#FFF4DE",
            danger: "#FFE2E5",
            light: "#F3F6F9",
            dark: "#D6D6E0",
          },
          inverse: {
            white: "#ffffff",
            primary: "#ffffff",
            secondary: "#3F4254",
            success: "#ffffff",
            info: "#ffffff",
            warning: "#ffffff",
            danger: "#ffffff",
            light: "#464E5F",
            dark: "#ffffff",
          },
        },
        gray: {
          "gray-100": "#F3F6F9",
          "gray-200": "#EBEDF3",
          "gray-300": "#E4E6EF",
          "gray-400": "#D1D3E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#7E8299",
          "gray-700": "#5E6278",
          "gray-800": "#3F4254",
          "gray-900": "#181C32",
        },
      },
      "font-family": "Poppins",
    };
  </script>
  <!--end::Global Config-->
  <!--begin::Page Scripts(used by this page)-->


  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
  <script src="assets/js/scripts.bundle.js"></script>

  <?php
  if (isset($_GET["action"])) {
    $action = $_GET["action"];
    // case 'dashboard':
    //   echo `<script src="assets/js/pages/widgets.js?v=7.0.6"></script>`;
    //   break;
    // case 'createProperty':
    //   echo `<script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>`;
    //   echo `<script src="assets/js/pages/crud/forms/widgets/tagify.js?v=7.0.6"></script>`;
    //   break;
    if ($action === 'allPlots') {
  ?>
      <script src="assets/js/pages/crud/ktdatatable/base/html-table.js"></script>

    <?php
    }
    if ($action === 'createPaymentsProfile' || $action === 'ViewPaymentProfile') {
    ?>
      <script src="assets/js-mod/tagify.js"></script>
      <script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>
      <script src="assets/js-mod/createPaymentProfileValidation.js"></script>

    <?php
    }
    if ($action === 'addTenants' || $action === 'ViewTenants') {
    ?>
      <script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>
      <script src="assets/js-mod/createTenantProfileValidation.js"></script>



    <?php
    }
    if ($action === 'allPlots') {
    ?>
      <script src="assets/js-mod/plots-html-table.js"></script>


    <?php
    }
    if ($action === 'allProperties') {
    ?>
      <script src="assets/js-mod/properties-html-table.js"></script>


    <?php
    }
    if ($action === 'allPayments') {
    ?>
      <script src="assets/js-mod/payment-table-html-table.js"></script>


    <?php
    }
    if ($action === 'paymentsProfiles') {
    ?>
      <script src="assets/js-mod/payment-profile-tablehtml-table.js"></script>


    <?php
    }
    if ($action === 'allTenants') {
    ?>
      <script src="assets/js-mod/tenant-propfile-html-table.js"></script>


    <?php
    }
    if ($action === 'recordPayment') {
    ?>
      <script src="assets/js-mod/tagify.js"></script>
      <script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>
      <script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js?v=7.0.6"></script>
      <script src="assets/js-mod/recordRaymentValidation.js"></script>

    <?php
    }
    if ($action === 'paymentProfileData' || $action === 'ViewProperty') {
    ?>
      <script src="assets/js/pages/widgets.js?v=7.0.6"></script>


    <?php
    }
    if ($action === 'createProperty' || $action === 'ViewProperty') {
    ?>
      <script src="assets/js-mod/tagify.js"></script>
      <script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>
      <script src="assets/js-mod/createPropertyValidation.js"></script>
      <script src="assets/js/pages/crud/forms/widgets/bootstrap-switch.js?v=7.0.6"></script>



    <?php
    }
    if ($action === 'addPlot' || $action === 'ViewPlot') {
    ?>
      <script src="assets/js-mod/tagify.js"></script>
      <script src="assets/js/pages/crud/forms/widgets/bootstrap-switch.js?v=7.0.6"></script>
      <script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>
      <script src="assets/js-mod/createPlotValidation.js"></script>



    <?php
    }
    if ($action === 'addUser') {
    ?>

      <script src="assets/js-mod/createUserValidation.js"></script>



    <?php
    }
    if ($action === 'allMails') {
    ?>


      <script src="assets/js-mod/mail-html-table copy.js"></script>

    <?php
    }
    if ($action === 'sendMail') {
    ?>


      <script src="assets/js-mod/tagify.js"></script>
      <script src="assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>
      <script src="assets/js-mod/createPropertyValidation.js"></script>
      <script src="assets/js-mod/mailEditor.js"></script>


  <?php
    }
  } ?>

  <!--begin::Global Theme Bundle(used by all pages)-->

  <!--end::Global Theme Bundle-->

  <!--begin::Page Vendors(used by this page)-->

  <!--end::Page Vendors-->




  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>