<?php
$to ="akilraza07860786@gmail.com";
$subject ="Contact number";
$message ="good moning sir first of all thank u for giving this opprtunity";
$headers ="from: akilraza07860786@gmail.com";

if (mail ($to, $subject, $message, $headers)) {

    echo "mail send successfully";

    else {

    echo "can not send mail";
?>


