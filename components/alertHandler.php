<?php
if (isset($_SESSION["action_success"])) {
?>
    <div class="form-group row">

        <div class="col-lg-12">
            <?php
            include("./components/successMessage.php");
            ?>
        </div>
    </div>
<?php
}


if (isset($_SESSION["action_fail"])) {
?>
    <div class="form-group row">

        <div class="col-lg-12">
            <?php
            include("./components/failMessage.php");
            ?>
        </div>
    </div>
<?php
}
?>