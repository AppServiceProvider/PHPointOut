<?php 
/*
Adapter pattern is a structural design pattern that allows incompatible interfaces to work together. 
It acts as a bridge between two interfaces
*/

// Target Interface
interface Target {
    public function request();
}
// Adaptee Class
class Adaptee {
    public function specificRequest() {
        return "Adaptee: Specific request.";
    }
}
// Adapter Class
class Adapter implements Target {
    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    public function request() {
        return $this->adaptee->specificRequest();
    }
}
$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
echo $adapter->request();
