<?php
session_start();

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
  <base href="./">
  <meta charset="utf-8" />
  <title>Sign In</title>
  <meta name="description" content="Login page example" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> <!--end::Fonts-->


  <!--begin::Page Custom Styles(used by this page)-->
  <link href="assets/css/pages/login/classic/login-4.css?v=7.0.6" rel="stylesheet" type="text/css" />
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
  <link href="assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" /> <!--end::Layout Themes-->

  <link rel="shortcut icon" href="assets/media/favicon/favicon-32x32.png" />


</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
      <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
        <div class="login-form text-center p-7 position-relative overflow-hidden">
          <!--begin::Login Header-->
          <div class="d-flex flex-center mb-5">
            <a href="#">
              <svg width="197.217" height="73.389" viewBox="0 0 197.217 73.389" xmlns="http://www.w3.org/2000/svg">
                <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#000" stroke-width="0.25mm" fill="#000" style="stroke:#000;stroke-width:0.25mm;fill:#000">
                  <path d="M 105.029 72.412 L 94.678 72.412 L 74.121 12.793 L 73.682 12.793 Q 73.828 14.795 74.023 18.262 A 350.604 350.604 0 0 1 74.207 21.851 A 426.581 426.581 0 0 1 74.365 25.684 A 211.908 211.908 0 0 1 74.503 31.424 A 184.657 184.657 0 0 1 74.512 33.252 L 74.512 72.412 L 63.867 72.412 L 63.867 1.026 L 80.322 1.026 L 100.098 58.008 L 100.391 58.008 L 120.85 1.026 L 137.256 1.026 L 137.256 72.412 L 126.074 72.412 L 126.074 32.666 A 197.792 197.792 0 0 1 126.105 29.261 A 248.581 248.581 0 0 1 126.196 25.586 A 438.229 438.229 0 0 1 126.331 21.875 A 373.012 373.012 0 0 1 126.489 18.36 Q 126.66 14.942 126.758 12.891 L 126.367 12.891 L 105.029 72.412 Z M 151.514 69.58 L 151.514 58.545 A 69.347 69.347 0 0 0 156.727 60.572 A 88.611 88.611 0 0 0 161.23 61.988 A 39.539 39.539 0 0 0 172.168 63.526 Q 175.638 63.526 178.21 62.827 A 13.904 13.904 0 0 0 179.712 62.329 A 11.353 11.353 0 0 0 181.935 61.163 A 8.193 8.193 0 0 0 184.18 58.911 A 8.876 8.876 0 0 0 185.583 54.901 A 11.242 11.242 0 0 0 185.645 53.711 A 9.776 9.776 0 0 0 185.294 51.035 A 7.821 7.821 0 0 0 183.936 48.34 A 11.79 11.79 0 0 0 182.185 46.551 Q 180.774 45.37 178.784 44.312 A 66.31 66.31 0 0 0 175.959 42.901 Q 173.401 41.693 170.166 40.381 Q 166.65 38.965 163.452 37.159 A 27.146 27.146 0 0 1 157.764 32.91 Q 155.273 30.469 153.833 27.124 A 16.989 16.989 0 0 1 152.709 23.233 Q 152.412 21.484 152.394 19.504 A 28.301 28.301 0 0 1 152.393 19.239 A 21.059 21.059 0 0 1 152.989 14.112 A 16.324 16.324 0 0 1 155.298 8.887 A 17.823 17.823 0 0 1 161.523 3.268 A 22.343 22.343 0 0 1 163.501 2.295 A 27.007 27.007 0 0 1 169.927 0.455 A 37.101 37.101 0 0 1 175.879 0 A 48.013 48.013 0 0 1 183.288 0.554 A 41.644 41.644 0 0 1 186.45 1.172 Q 191.406 2.344 196.191 4.493 L 192.48 13.916 A 70.054 70.054 0 0 0 186.565 11.778 A 59.572 59.572 0 0 0 183.96 11.035 A 33.293 33.293 0 0 0 175.537 9.961 A 20.428 20.428 0 0 0 172.72 10.145 Q 171.265 10.348 170.034 10.775 A 11.308 11.308 0 0 0 169.238 11.084 A 10.066 10.066 0 0 0 167.094 12.33 A 7.907 7.907 0 0 0 165.308 14.234 A 8.028 8.028 0 0 0 164.06 17.618 A 10.41 10.41 0 0 0 163.965 19.043 A 10.514 10.514 0 0 0 164.239 21.502 A 7.814 7.814 0 0 0 165.503 24.292 Q 166.739 26 169.081 27.471 A 21.588 21.588 0 0 0 170.288 28.174 A 63.904 63.904 0 0 0 172.865 29.488 Q 174.121 30.096 175.571 30.744 A 142.625 142.625 0 0 0 178.662 32.08 A 76.641 76.641 0 0 1 183.491 34.263 Q 185.654 35.338 187.501 36.457 A 43.653 43.653 0 0 1 188.696 37.207 Q 192.822 39.893 195.02 43.628 Q 197.217 47.364 197.217 52.979 A 21.806 21.806 0 0 1 196.536 58.544 A 17.456 17.456 0 0 1 194.116 63.916 A 18.584 18.584 0 0 1 187.955 69.593 A 23.774 23.774 0 0 1 185.229 70.948 A 29.489 29.489 0 0 1 178.888 72.779 Q 175.897 73.308 172.489 73.378 A 51.102 51.102 0 0 1 171.436 73.389 A 63.026 63.026 0 0 1 165.768 73.142 A 55.621 55.621 0 0 1 163.965 72.95 A 49.999 49.999 0 0 1 158.953 72.08 A 43.361 43.361 0 0 1 157.251 71.656 A 37.511 37.511 0 0 1 153.555 70.453 A 30.808 30.808 0 0 1 151.514 69.58 Z M 0 1.026 L 20.068 1.026 A 62.709 62.709 0 0 1 26.288 1.316 Q 31.464 1.833 35.327 3.272 A 20.992 20.992 0 0 1 39.868 5.584 A 15.836 15.836 0 0 1 44.312 10.108 A 17.634 17.634 0 0 1 46.606 15.641 Q 47.266 18.431 47.266 21.778 A 23.889 23.889 0 0 1 46.943 25.804 Q 46.532 28.209 45.596 30.194 A 14.516 14.516 0 0 1 45.312 30.762 A 18.536 18.536 0 0 1 40.186 36.914 Q 37.012 39.356 33.398 40.821 L 53.662 72.412 L 40.43 72.412 L 23.193 43.799 L 11.719 43.799 L 11.719 72.412 L 0 72.412 L 0 1.026 Z M 19.287 10.791 L 11.719 10.791 L 11.719 34.131 L 19.824 34.131 A 34.796 34.796 0 0 0 24.004 33.898 Q 29.001 33.292 31.665 31.104 A 9.741 9.741 0 0 0 34.99 25.584 A 15.205 15.205 0 0 0 35.352 22.168 Q 35.352 17.973 33.553 15.432 A 7.921 7.921 0 0 0 31.421 13.379 A 12.78 12.78 0 0 0 28.214 11.906 Q 25.148 10.942 20.705 10.812 A 48.504 48.504 0 0 0 19.287 10.791 Z" vector-effect="non-scaling-stroke" />
                </g>
              </svg>
            </a>
          </div>
          <!--end::Login Header-->

          <!--begin::Login Sign in form-->
          <div class="login-signin">
            <div class="mb-20">
              <h3>Sign In To Admin</h3>
              <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
            </div>
            <?php
            include("./components/alertHandler.php");
            ?>
            <form class="form" id="kt_login_signin_form" method="POST" action="./server/auth/UserSignIn.php">
              <div class="form-group mb-5">
                <input name="user_email" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="username" autocomplete="off" />
              </div>
              <div class="form-group mb-5">
                <input name="user_password" class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between align-items-center">

                <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
              </div>
              <input type="submit" name="UserSignInAuth" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4" value="Sign In">
            </form>

          </div>
          <!--end::Login Sign in form-->

          <!--begin::Login Sign up form-->

          <!--end::Login Sign up form-->

          <!--begin::Login forgot password form-->
          <div class="login-forgot">
            <div class="mb-20">
              <h3>Forgotten Password ?</h3>
              <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
            </div>
            <form class="form" id="kt_login_forgot_form">
              <div class=" form-group mb-10">
                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
              </div>
              <div class="form-group d-flex flex-wrap flex-center mt-10">
                <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
                <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
              </div>
            </form>
          </div>
          <!--end::Login forgot password form-->
        </div>
      </div>
    </div>
    <!--end::Login-->
  </div>
  <!--end::Main-->


  <script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
  </script>
  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#3699FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#E4E6EF",
            "dark": "#181C32"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1F0FF",
            "secondary": "#EBEDF3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#3F4254",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#EBEDF3",
          "gray-300": "#E4E6EF",
          "gray-400": "#D1D3E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#7E8299",
          "gray-700": "#5E6278",
          "gray-800": "#3F4254",
          "gray-900": "#181C32"
        }
      },
      "font-family": "Poppins"
    };
  </script>
  <!--end::Global Config-->

  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <!--end::Global Theme Bundle-->


  <!--begin::Page Scripts(used by this page)-->
  <script src="assets/js-mod/login-general.js"></script>
  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>