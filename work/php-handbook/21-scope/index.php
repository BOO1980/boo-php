<?php   
    $character = 'a';

    function test(&$c){
       $c = 'b';
    }

    test ($character)
    echo $character;
    ?>
