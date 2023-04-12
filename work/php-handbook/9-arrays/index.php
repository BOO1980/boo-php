<?php 

    $list1 = [1,2];
    $list2 = array(1,2);
    $list3 = [1,'test'];
    $list4 = [$list1, $list2];
    $list5 = [1,[2,'test']];
    $list6 = ['a','b'];
    echo $list6[0]; //a the index starts at 0
    echo $list6[1]; //b
    $list7 = ['a','b'];
    $list7[] = 'c';
    echo $list7[2];
    $list8 = ['b','c'];
    array_unshift($list8, 'z'); //put item at the beginning of an array
    echo $list8[0];
    echo count($list8); //count elements in an array
    echo in_array('z', $list8);
    echo array_search('c', $list8);
?>