<?php
// the code you provided demonstrates[প্রদর্শন করে] loose coupling through the use of an abstract class
abstract class Car {
    public $name;
    // public function __construct($name) {
    //   $this->name = $name;
    // }
    // abstract public function intro() : string; 
  }
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!"; 
    }
  }
  
  $audi = new audi("Audi");
  echo $audi->intro();

//   =======================================================

abstract class Car1 {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string; 
  }
  class Audi2 extends Car1 {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!"; 
    }
  }
  
  $audi = new audi2("Audi");
  echo $audi->intro();