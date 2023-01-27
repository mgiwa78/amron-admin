<?php

$message = $_SESSION["action_success"];
?>

<div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
    <div class="alert-icon"><i class="flaticon-paper-plane"></i></div>
    <div class="alert-text"><?php echo $message; ?></div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>

<?php
unset($_SESSION['action_success']);
?>