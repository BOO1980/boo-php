<?php
    $list = ['a', 'b', 'c'];

    for ($i = 0; $i < count($list); $i++){
        if($list[$i] == 'b'){
            continue;
        }
        echo $list[$i];
    }
?>