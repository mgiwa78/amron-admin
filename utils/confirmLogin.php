<?php
if (isset($_SESSION["user_id"])) {
} else {
    header("Location: ./auth.php");
}
