<?php 

$callback = function($param) {
    echo $param . " world";
};
$someValue = "Hello";
$callback($someValue);
// ==================================


$double = function($number) {// Create a closure that doubles a number
    return $number * 2;
};

echo $double(5);  // Output: 10
