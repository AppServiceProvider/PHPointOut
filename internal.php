<?php 

class ClassA {
    private $internalVar = "I am a secret";
    private function internalMethod() {
        return "This is a private method";
    }
    public function getInternalVar() {
        return $this->internalVar;
    }
    public function callInternalMethod() {
        return $this->internalMethod();
    }
}
class ClassB {
    public function accessClassA(ClassA $objA) {
        // Accessing internal variable
        $internalVarValue = $objA->getInternalVar();
        echo "ClassB accessing ClassA's internal variable: $internalVarValue\n";
        // Accessing internal method
        $result = $objA->callInternalMethod();
        echo "ClassB accessing ClassA's internal method: $result\n";
    }
}
// Create instances of the classes
$objA = new ClassA();
$objB = new ClassB();
$objB->accessClassA($objA); // Accessing ClassA's internal variable and method from ClassB


// ==========================================================

class ClssA {
    private $internalVar = "I am a secret";
    private function internalMethod() {
        return "This is a private method";
    }
    public function getInternalVar() {
        return $this->internalVar;
    }
    public function callInternalMethod() {
        return $this->internalMethod();
    }
}

class ClssB {
    private $objA;

    // Constructor to accept an instance of ClassA
    public function __construct(ClssA $ojA) {
        $this->objA = $ojA;
    }

    public function accessClassA() {
        // Accessing internal variable
        $internalVarValue = $this->objA->getInternalVar();
        echo "ClassB accessing ClassA's internal variable: $internalVarValue\n";
        
        // Accessing internal method
        $result = $this->objA->callInternalMethod();
        echo "ClassB accessing ClassA's internal method: $result\n";
    }
}

// Create an instance of ClassA
$ojA = new ClssA();

// Create an instance of ClassB, passing ClassA instance as a parameter
$ojB = new ClssB($ojA);

// Access ClassA from ClassB
$ojB->accessClassA();

// =========================================

class ClasA {
    private $internalVar = "I am a secret";

    public function getInternalVar() {
        return $this->internalVar;
    }

    public function callInternalMethod() {
        return "This is a private method";
    }
}

class ClasB {
    public function accessClassA(ClasA $bjA) {
        $internalVarValue = $bjA->getInternalVar();
        echo "ClassB accessing ClassA's internal variable: $internalVarValue\n";

        $result = $bjA->callInternalMethod();
        echo "ClassB accessing ClassA's internal method: $result\n";
    }
}

// Create instances of the classes
$bjA = new ClasA();
$bjB = new ClasB();

$bjB->accessClassA($bjA);
