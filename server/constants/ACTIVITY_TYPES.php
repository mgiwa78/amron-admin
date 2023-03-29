<?php



function ReturnActivityID(
    $ActivityName,
) {

    $Activities = [
        "SALE_PROPERTY_CREATION" => 0,
        "RENT_PROPERTY_CREATION" => 1,
        "PROPERTY_DELETION" => 2,
        "PROPERTY_MODIFICATION" => 17,
        "ADDED_PROPERTY_IMAGE" => 3,

        "PAYMENT_PROFILE_CREATION" => 4,
        "PAYMENT_PROFILE_DELETION" => 5,
        "PAYMENT_PROFILE_MODIFICATION" => 6,

        "USER_PROFILE_CREATION" => 7,
        "USER_PROFILE_DELETION" => 8,
        "USER_PROFILE_MODIFICATION" => 9,

        "PLOT_CREATION" => 10,
        "PLOT_DELETION" => 11,
        "PLOT_MODIFICATION" => 12,

        "TENANT_PROFILE_CREATION" => 13,
        "TENANT_PROFILE_DELETION" => 14,
        "TENANT_PROFILE_MODIFICATION" => 15,

        "PAYMENT_RECORDING" => 16,
    ];

    return  $Activities["$ActivityName"];
}
