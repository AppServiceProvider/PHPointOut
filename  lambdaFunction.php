<?php 
// anonymous is call lambda function. a function is no name
$multiplier = 2;

$timesTwo = function ($number) use ($multiplier) {
    return $number * $multiplier;
};

$result = $timesTwo(5); // Returns 10



// ===========================================
$addition = function ($a, $b) {
    return $a + $b;
};

$result = $addition(3, 4); // Returns 7


// ==========================================================
