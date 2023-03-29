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
  <title>Confirm ID</title>
  <meta name="description" content="Login page example" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->

  <!--begin::Page Custom Styles(used by this page)-->
  <link href="assets/css/pages/login/login-2.css?v=7.0.6" rel="stylesheet" type="text/css" />
  <!--end::Page Custom Styles-->

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

<body id="kt_body" class="bg-white header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading d-flex justify-content-center align-items-center">
  <!--begin::Main-->

  <!--begin::Aside-->
  <!--begin: Aside Container-->
  <div class="d-flex flex-column-fluid flex-column justify-content-center py-9 px-7 py-lg-13 px-lg-35">
    <!--begin::Logo-->
    <a href="#" class="text-center pt-2">
      <img src="assets/media/AMRON Global Services/Without Background/Primary Logo/AMRON Primary Coloured.png" class="" style="margin-bottom: -20px; width: 400px" alt="" />
    </a>
    <!--end::Logo-->

    <!--begin::Aside body-->
    <!--begin::Signin-->
    <div class="py-11">
      <!--begin::Form-->
      <form method="POST" action="./server/form/handleConfirmPaymentID.php" class="form" novalidate="novalidate" id="kt_login_signin_form">
        <!--begin::Title-->
        <div class="text-center pb-8">
          <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
            Make Your Payment
          </h2>
        </div>
        <!--end::Title-->

        <!--begin::Form group-->
        <div class="form-group">
          <label class="font-size-h6 font-weight-bolder text-dark">Payment ID</label>
          <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="payment_profile_ID" autocomplete="off" />
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->

        <!--end::Form group-->

        <!--begin::Action-->
        <div class="text-left pt-2">
          <input type="submit" value="Verify Profile" name="confirmPaymentProfileSubmit" id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3" />
        </div>
        <!--end::Action-->
      </form>
      <!--end::Form-->
      <!--end::Signin-->
    </div>
  </div>
  <!--end::Aside body-->

  <!--begin: Aside footer for desktop-->

  <!--end: Aside footer for desktop-->

  <!--end::Login-->

  <!--end::Main-->

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

  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
  <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
  <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
  <!--end::Global Theme Bundle-->

  <!--begin::Page Scripts(used by this page)-->
  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>