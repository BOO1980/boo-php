<?php 
    $age = 17;

    switch($age){
        case 15: 
            echo 'You are 15';
            break; //without the break statement it will continue through the code
        case 16:
            echo 'You are 16';
        break;
        case 17:
            echo 'You are 17';
        break;
        case 18:
            echo 'You are 18';
            break 
        default: 
            echo "You are $age";
    }
?>