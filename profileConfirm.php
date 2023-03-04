<?php
// Start the session
session_start();

// Include the Paystack PHP library
require_once('./server/payment/autoload.php');

// Set your API key
$paystack = new Yabacon\Paystack('sk_test_d766fc5b40a2b70285c9f52048431c24fe009e17');
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
  <title>Confirm Profile</title>
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

<body id="kt_body" class="bg-secondary header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading d-flex justify-content-center align-items-center">
  <!--begin::Main-->

  <?php

  include("./server/payment/fetchPaymentProfile.php");
  $id = $_GET["Pid"];
  $PaymentProfile = FetchPaymentProfile($id);

  $paymentTypes = array(0 => "Service Charge", 1 => "Property", 2 => "Plot", 3 => "Rent",)

  ?>
  <!--begin::Aside-->
  <!--begin: Aside Container-->
  <div style="width: 40%" class="card card-custom gutter-b">
    <div class="card-header">
      <div class="card-title">
        <h3 class="card-label h2">Payment Details</h3>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <label class="font-weight-bolder h5">Name:</label>
        </div>
        <div class="col-6"><span class="font-size-h5"><?php echo $PaymentProfile["client_l_name"] . " " . $PaymentProfile["client_f_name"]; ?></span></div>
      </div>
      <div class="row">
        <div class="col-6">
          <label class="font-weight-bolder h5">Amount to pay:</label>
        </div>
        <div class="col-6"><span class="font-size-h5"><?php echo $PaymentProfile["amount_to_pay"]; ?></span></div>
      </div>
      <div class="row">
        <div class="col-6">
          <label class="font-weight-bolder h5">Type:</label>
        </div>
        <div class="col-6"><span class="font-size-h5"><?php echo $paymentTypes["$PaymentProfile[payment_type]"]; ?></span></div>
      </div>
    </div>
    <div class="card-footer">
      <div class="text-left pt-2">
        <?php
        if (isset($_SESSION["payment_status"])) {
          $path = " ";
        } else {
          $path = "onclick='payWithPaystack()'";
        }
        ?>
        <?php
        if (isset($_GET['Pid'])) {
          $payment_id = $_GET['Pid'];
          $mysqli = new mysqli("localhost", "root", "", "amron");

          // Fetch the payment amount from the database
          $stmt = $mysqli->prepare("SELECT amount_to_pay FROM payment_profiles WHERE client_payment_id = ?");
          $stmt->bind_param("s", $payment_id);
          $stmt->execute();
          $result = $stmt->get_result();
          $row = $result->fetch_assoc();
          $payment_amount = $row['amount_to_pay'];
          $stmt->close();

          // Set the payment parameters
          $payment_data = array(
            "amount" => $payment_amount * 100, // Paystack requires amount to be in kobo
            "email" => "customer@example.com", // Customer's email
            "metadata" => array(
              "payment_id" => $payment_id, // Payment ID from your database
            ),
          );

          // Initialize the payment with Paystack
          try {
            $transaction = $paystack->transaction->initialize($payment_data);
          } catch (Yabacon\Paystack\Exception\ApiException $e) {
            // Handle the error
            die($e->getMessage());
          }

          $payment_form = "<script src='https://js.paystack.co/v1/inline.js'></script>
        <form id='paymentForm'>
            <button id='kt_login_signin_submit' class='btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3'  type='button' onclick='payWithPaystack()'>Pay Now</button>
            </form>
            <script>
              function payWithPaystack() {
                var handler = PaystackPop.setup({
                  key: 'pk_test_04ce7b3f751546859d4307b453c37740a7bf55ac',
                  email: 'customer@example.com',
                  amount: " . $payment_amount * 100 . ",
                  ref: '" . $transaction->data->reference . "',
                  metadata: {
                    payment_id: '" . $payment_id . "',
                  },
                  callback: function(response) {
                      window.location.href = 'verify.php?reference=' + response.reference + '&payment_id=" . $payment_id . "';
                  },
                  onClose: function() {
                      alert('Payment cancelled.');
                  }
                });
                handler.openIframe();
              }
            </script>";

          echo $payment_form;
        } else {
          // Redirect to the payment page if the payment ID is not set
          header("Location: paymentID.php");
          exit();
        }
        ?>

      </div>
    </div>
  </div>
  <!--end::Aside body-->

  <!--begin: Aside footer for desktop-->

  <!--end: Aside footer for desktop-->
  <!--end::Login-->
  <!-- <script src="https://js.paystack.co/v1/inline.js"></script> -->
  <script>
    var HOST_URL =
      " https://preview.keenthemes.com/metronic/theme/html/tools/preview";
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
  <!-- <script src="assets/js-mod/paystackForm.js"></script> -->
  <!--end::Global Theme Bundle-->

  <!--begin::Page Scripts(used by this page)-->
  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>