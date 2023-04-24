<?php
    function sendEmail(string $to, string $subject, string $body){
        echo "send an email to $to";
        echo "the email subject is $subject";
        echo "the body of the email is $body";
    }

    sendEmail('test@test.com','subject', 'body of the email');
?>