<?php
    $name = 'Flavio';
    $sub1 = substr($name, 3); // start at position 3, get al the rest
    $sub2 = substr($name,2,3); // starts at position 2, get 2 items
    echo $sub1;
    echo $sub2;
    $replace = str_replace('avio','ower',$name);
    echo $replace;

?>