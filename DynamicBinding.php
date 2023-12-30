<?php 
/*
Dynamic binding in PHP is closely related to runtime polymorphism and is achieved through method overriding.
 When a method is called on an object, PHP determines the actual method to invoke at runtime based on the type of the object.
  Here's an example demonstrating dynamic binding in PHP:
*/


// Base class
class Animal {
    public function makeSound() {
        return "Generic animal sound";
    }
}
// Derived class 1
class Dog extends Animal {
    public function makeSound() {
        return "Bark!";
    }
}
// Function using dynamic binding
function animalSound(Animal $animal) {
    // The correct method is dynamically determined at runtime
    echo $animal->makeSound() . "\n";
}
// Create objects of different types
$genericAnimal = new Animal();
$dog = new Dog();
// Call the function with different types of objects
animalSound($genericAnimal); // Calls the makeSound method of the Animal class
animalSound($dog);          // Calls the makeSound method of the Dog class


