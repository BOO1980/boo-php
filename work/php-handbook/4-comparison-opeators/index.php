<?php 
    //$ans1 = 2 < 1;
    2 < 1; // false
    1 <= 1; // true
    1 <= 2; //true
    1 == '1'; //true
    1 === '1'; //false
    1 != 1; //false
    1 !== '1'; // false
    1 != 2; //true
    1 !== 1; //false
    1 !== '1'; //true
    //Logical AND with && or "and"
    true && true; //true
    true && false; //false
    false && true; //false
    false && false; //false
    true and true; //true
    true and false; //false
    false and true; //false
    false and false; //false
    //Logical OR with || or "or"
    true || true; //true
    true || false; //true
    false || true; //true
    false || false; //false
    true or true; //true
    true or false; //true
    false or true; //true
    false or false; //false
    //Logical XOR (one of the two is true, but not both)
    true xor true; //false
    true xor false; //true
    false xor true; //true
    false xor false; //false
    $test = true;
    echo !$test; //false
    1 > 2 || 2 > 1; //true
    1 !== 2 && 2 > 2; //false
    $age = 20;
    $age++;
    echo $age;
    $age--;
    echo $age;

?>