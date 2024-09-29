<?php 

$nullValue = null;
$object = (object) $nullValue;



$bool = true;
$object = (object) $bool;

/*
If you cast an object of a custom class to (object), nothing changes—it remains an object of the original class.
i dont understand what diff object and cast object
*/
class MyClass {
    public $property = 'value';
}

$myObject = new MyClass();
$object = (object) $myObject;


var_dump($myObject);
var_dump($object);

