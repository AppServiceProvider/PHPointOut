<?php 

class Motor{
    private $name, $email, $address;
    function __construct($name, $email, $address){
        $this->name= $name;
        $this->email= $email;
        $this->address= $address;
    }
    function getName(){
        return $this-> name;
    }
    function setName($name){
        $this-> name= $name;
    }
    // Magic __get method for accessing private properties
    // property overloading 
    function __get($property) {
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }
}
$obj= new Motor('Roman', 'roman.shaon@gmail.com',  'Dhaka');
// echo $obj->getName();

// echo $obj-> names;
// echo $obj-> email;
// echo $obj-> address;



// ========================================================



class Motor1 {
    private $parameters;

    // Constructor to initialize the parameters array with name, email, and address
    function __construct($name, $email, $address) {
        $this->parameters = [];  // Initialize the parameters array
        $this->parameters['name'] = $name;
        $this->parameters['email'] = $email;
        $this->parameters['address'] = $address;
    }

    // Getter method for name (could also use __get, but keeping for flexibility)
    function getName() {
        return $this->parameters['name'];
    }

    // Setter method for name
    function setName($name) {
        $this->parameters['name'] = $name;
    }

    // Magic __get method for property overloading
    function __get($property) {
        // Check if the property exists in the parameters array
        if(array_key_exists($property, $this->parameters)) {
            return $this->parameters[$property];
        }
        return null;  // Return null if the property doesn't exist
    }
}

// Create a new Motor1 object
$obj1 = new Motor1('hello', 'hello.hello@gmail.com', 'bd');

// Accessing the private properties through the __get magic method
// echo $obj1->name;  // This will output 'hello'



// =============================== __get __set

class Motor2 {
    private $parameters;
    function __construct($name, $email, $address) {
        $this->parameters = [];  // Initialize the parameters array
        $this->parameters['name'] = $name;
        $this->parameters['email'] = $email;
        $this->parameters['address'] = $address;
    }

    // Magic __get method for property overloading
    function __get($property) {
            return $this->parameters[$property];

    }
    function __set($property, $value) {
        return $this->parameters[$property]=$value;

     }
}
$obj2 = new Motor2('hello', 'hello.hello@gmail.com', 'bd');

// Accessing the private properties through the __get magic method
echo $obj2->name;  // 'hello'
echo $obj2->namse;  