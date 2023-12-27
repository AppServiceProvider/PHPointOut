<?php

class A {
    private $name;
    public $color;
    function __construct($a, $b) {
      $this->name = $a;
      $this->color = $b;
    }
    public function getName() {
      return $this->name;
    }
  }
  class B {
    function h(A $aaa) {
      // Access the private property using the getter method
      echo $aaa->getName();
    }
  }
  $ins = new A("php", 'js');
  $ins2 = new B();
  $ins2->h($ins);
  


// way two 
  class Parent1 {
    private $privateProperty = "Confidential data";
    public function getFunction() {
        return $this->privateProperty;
    }
}
class Child2 extends Parent1 {
    public function index() {
        $value = $this->getFunction(); // Access through inherited method
        // $this->privateProperty = "Modified data"; // Attempt to modify (not allowed)
    }
}
$insObj = new Child2();
$insObjValu = $insObj->getFunction();
echo $insObjValu; // Output: Confidential data



// way 3
class Parent3 {
    private $privateProperty;
    public function __construct($privatePropertyParam) {
         $this->privateProperty=$privatePropertyParam;
    }
    public function getFunction() {
        return $this->privateProperty;
    }
}
class Child3 extends Parent3 {
    public function index() {
        $value = $this->getFunction(); // Access through inherited method
        // $this->privateProperty = "Modified data"; // Attempt to modify (not allowed)
    }
}
$insObj1 = new Child3("Confidential data");
$insObjValu1 = $insObj1->getFunction();
echo $insObjValu1; // Output: Confidential data


