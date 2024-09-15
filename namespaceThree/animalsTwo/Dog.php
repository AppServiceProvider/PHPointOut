<?php

namespace AnimalsTwo;

use \Sounds\DogSound;


class Dog extends DogSound{
    public function bark() {
        return "Dog extends Sound Class with " . $this->makeSound();

    }
}

// echo (new Dog())->bark();
$obj= new Dog();
echo $obj->bark();