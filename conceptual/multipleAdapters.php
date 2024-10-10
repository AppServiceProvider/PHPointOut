<?php 

// Target Interface
// Incompatible Interface
interface Target {
    public function request();
}

// Another Adaptee Class
class AnotherAdaptee {
    public function anotherSpecificRequest() {
        return "AnotherAdaptee: Another specific request.";
    }
}

// Adapter for Another Adaptee
class AnotherAdapter implements Target {
    private $anotherAdaptee;

    public function __construct(AnotherAdaptee $anotherAdaptee) {
        $this->anotherAdaptee = $anotherAdaptee;
    }

    public function request() {
        return $this->anotherAdaptee->anotherSpecificRequest();
    }
}

$anotherAdaptee = new AnotherAdaptee();
$anotherAdapter = new AnotherAdapter($anotherAdaptee);
echo $anotherAdapter->request(); // Output: AnotherAdaptee: Another specific request.
