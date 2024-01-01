<?php 
// callable
function myFunction() {
    echo "Hello, world!";
}

$callable = 'myFunction'; // callable variable
$callable(); // calling the function using the variable



// a callable in PHP can be a regular function
$regularFunction = function ($name) {
    return "Hello, $name!";
};

$callableResult = $regularFunction('John');
echo $callableResult; // Output: Hello, John!




//  a callable in PHP can be a regular function
$regularFunction = function ($name) {
    return "Hello, $name!";
};

$callableResult = $regularFunction('John');
echo $callableResult; // Output: Hello, John!




// Object Methods callable extend beyond regular functions to include methods
class Greeting {
    public function sayHello($name) {
        return "Hello, $name!";
    }
}

$obj = new Greeting();
$objectMethod = [$obj, 'sayHello'];

$callableResult = call_user_func($objectMethod, 'Jane');
echo $callableResult; // Output: Hello, Jane!





// Static methods, which are not tied to a specific instance of a class, are also callable in PHP
class MathOperations {
    public static function add($a, $b) {
        return $a + $b;
    }
}
$staticMethod = ['MathOperations', 'add'];

$callableResult = call_user_func($staticMethod, 5, 3);
echo $callableResult; // Output: 8