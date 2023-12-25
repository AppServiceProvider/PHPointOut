<?php
// inheritance and composition to model a car:

// Inherited Properties and Methods
class Bird
{
   public $wingspan;
   public $colors;
   
   public function eat(string $food)
   {
      echo "I'm eating " . $food;
   }
}

class Parrot extends Bird
{
   //...
}

function watchBird(Bird $bird) //confuse
{
   echo 'Here is a bird!';
}
$bird = new Bird();
watchBird($bird);

$parrot = new Parrot();
watchBird($parrot); /* This works just fine. */




// Maintainability and loose coupling
class Vehicle
{    
    public function move()
    {
        echo "Move the car";
    }    
}
class Car extends Vehicle
{
    public function accelarate()
    {    
        $this->move(); 
    }
}
$car = new Car();
$car->accelarate(); //Move the car



// The final keyword is used to prevent a class from being inherited and to prevent inherited method from being overridden.
final class MyClass {
    public $name = "John";
  }// This code will throw an error
  class AnotherClass extends MyClass{};



  class Bird2
{
/* In PHP, the :string in the method signature is a type declaration indicating 
that the fly method is expected to return a string. However, PHP is a loosely 
typed language, and it's not strictly enforced at runtime */
    public function fly(): string
		{
		    return 645;
		}
}
final class Pigeon extends Bird2
{
}
$pigeon = new Pigeon();
$a= $pigeon->fly();
// echo gettype($a);
var_dump($a); //string(3) "645"


