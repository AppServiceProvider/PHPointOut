<?php 
// Functions Dynamically with Variable Functions
$functionName = "sayHello";
$sayHello = function() {
    echo "Hello!";
};

$functionName();  // Calls the dynamically created function








// ======== Functions Dynamically with Variable Functions==================
$functionName = $sayHello = function() {
    echo "Hello!";
};
// Call the anonymous function directly using the variable
$functionName();  // Calls the dynamically created function










// =====Dynamic Function Names in Classes=============
class Record {
    private $data = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function __call($name, $arguments) {
        $property = lcfirst(substr($name, 3)); // Remove 'get' prefix and lowercase first letter

        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        } else {
            throw new Exception("Property $property does not exist");
        }
    }
}

$record = new Record(['name' => 'John Doe', 'age' => 30]);

try {
    echo $record->getName();  // Output: John Doe
} catch (Exception $e) {
    echo $e->getMessage();
}




// Dynamic Callbacks:
function performOperation($callback, $value) {
    return $callback($value);
}

$square = function($num) {
    return $num * $num;
};

echo performOperation($square, 5);  // Output: 25
