<?php

namespace Xyz\Animals;
// require "cat.php";
class Dog extends Cat
{
    function getName()
    {
        echo "Dog";
    }
}

// (new Dog)->getName(); // Dog

// $obj= new Dog();
// $obj->getSound();

