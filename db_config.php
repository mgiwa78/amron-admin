<?php

$_ENV["ENVIRONMENT"] = "development";

$environment = getenv('ENVIRONMENT');

if ($environment === 'development') {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "amron";
} else {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "amron";
}
