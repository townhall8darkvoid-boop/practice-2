<?php
function email_validation($str) {
    $pattern = "/^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    return preg_match($pattern, $str) ? true : false;
}

if (email_validation("ryan@gmail.com")) {
    echo "Valid email address.";
} else {
    echo "Invalid email address.";
}
?>