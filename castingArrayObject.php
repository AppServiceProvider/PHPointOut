<?php 

/*
cast an array to an object
array's keys become properties of the object, 
array values become the property values.
*/



$array = ['a' => 'apple', 'b' => 'banana'];
$object = (object) $array;

