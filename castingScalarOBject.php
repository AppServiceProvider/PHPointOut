<?php 

/*
cast a scalar value (like an integer, float, or string) to an object, the value is stored in a single property named scalar.
*/


// =================Integer to Object

$int = 42;
$object = (object) $int;

print_r($object);



