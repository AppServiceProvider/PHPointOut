<?php 
class MyClass {
    private $value;
    public function setValue($value) {
        $this->value = $value;
        return $this; // Return the object to enable chaining
    }
    public function add($number) {
        $this->value += $number;
        return $this; // Return the object to enable chaining
    }
    public function multiply($number) {
        $this->value *= $number;
        return $this; // Return the object to enable chaining
    }
    public function getValue() {
        return $this->value;
    }
}
$result = (new MyClass())->setValue(5)->add(3)->multiply(2)->getValue();
echo "Result: $result"; // Output: Result: 16