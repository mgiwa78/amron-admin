<?php


if (isset($_GET["action"])) {
  $action = $_GET["action"];

  switch ($action) {
    case 'login':
      return include("dashboard.php");
      break;
    case 'changePwd':
      return include("user_change_password.php");
      break;
    case 'createAccount':
      return include("signup.php");
      break;
  }
} else {
  return header("location:./admin.php");;
}
