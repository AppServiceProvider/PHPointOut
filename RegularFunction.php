<?php 
// You can use regular functions as callbacks
function myCallbackFunction($param) {
    echo "Callback executed with parameter: $param";
}// Using the callback function
$someValue = "Hello";
myCallbackFunction($someValue);


// ========================================


// PHP functions take callbacks as parameters
$numbers = [1, 2, 3, 4];
$squared = array_map(function($num) {
    return $num * $num;
}, $numbers);
// $squared is now [1, 4, 9, 16]




// ========================================

function myCallbackFunction1($param) {
    echo "Callback executed with parameter: $param";
}// Using the callback function using a string
$callback = 'myCallbackFunction1';
$someValue = "Hello";
$callback($someValue);
