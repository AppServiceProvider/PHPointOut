<?php 
class Sodium{
    static function addForm():Sodium{
        echo "hi ";
       return new self();  
    }
    function addColums():Sodium{
        echo "hellow";
        return $this;

    }
    function addFields():Sodium{
        echo "world";
        return $this;

    }
}
Sodium::addForm()->addColums()->addFields();





// method chaining by returning the same instance ($this) from each method

class Fluent {
    protected $value;
    public function setValue($value) {
        $this->value = $value;
        return $this; // Return current object
    }
    public function increment() {
        $this->value++;
        return $this; // Return current object
    }
    public function getValue() {
        return $this->value;
    }
}
$fluent = new Fluent();
echo $fluent->setValue(5)->increment()->getValue(); // Outputs: 6

