<?php
    $age = 17;
    if($age > 18){
        echo 'you can enter the pub';
    }else{
        echo 'go away youngun';
    }

    $age2 = 17;
    if($age2 > 20){
        echo 'You are 20+';
    }else if($age2 > 18){
        echo 'You are 18+';
    }else{
        echo 'You are < 18';
    }
?>