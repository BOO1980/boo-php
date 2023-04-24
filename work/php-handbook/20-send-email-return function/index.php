<?php
    function sendEmail($to): bool{
        return true;
    }

    $success = sendEmail('test@test.com');
    
    if($success){
        echo 'email sent successfully';
    }else{
        echo 'error sending the email';
    }
?>