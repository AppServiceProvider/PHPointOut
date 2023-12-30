<?php 
class ExampleClass {
    private $someValue;
    public function __construct($initialValue) {
        $this->someValue = $initialValue;
    }
    public function getSomeValue(): void { //A void function must not return a value
        return $this->someValue;
    }
}
$exampleObject = new ExampleClass(5);
$result = $exampleObject->getSomeValue();
echo "Current value: $result\n";