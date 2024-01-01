<?php 

/*
PHP, a closure is a type of anonymous function 
that has the ability to capture variables from the surrounding scope in which it is defined. 
Closures are also sometimes referred to as anonymous functions or lambda functions
*/

$addTwo = function ($num) {
    return $num + 2;
};// $addTwo is a closure that takes a parameter

echo $addTwo(3); // Outputs 5


// ==========================================================

// Capturing Variables
$x = 10;  //capture variables from the surrounding scope
$addX = function ($num) use ($x) {
    return $num + $x;
}; // closure addX captures the variable $x from the outer scope

echo $addX(5); // Outputs 15

// =========================================================================
// Closures can be passed as arguments to functions or methods

function operateOnNumber($num, $operation) {
    return $operation($num);
}

$result = operateOnNumber(8, function ($n) {
    return $n * 2;
});

echo $result; // Outputs 16




