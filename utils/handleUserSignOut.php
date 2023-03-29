<?php
session_start();

if (isset($_POST["SignUserOut"])) {
    session_destroy();
    header("Location: ../");
}
