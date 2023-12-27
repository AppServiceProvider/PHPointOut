<?php 
// Parent class
class Animal {
    public function eat() {
        echo "The animal is eating.\n";
    }
}

// Child class
class Dog extends Animal {
    public function bark() {
        echo "Woof! Woof!\n";
    }
}

// Create an instance of the child class
$dog = new Dog();

// Accessing methods from both parent and child classes
$dog->eat();  // Inherited from the Animal class
$dog->bark(); // Defined in the Dog class

