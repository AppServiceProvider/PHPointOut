<?php 
class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age, $class){
        $this->name= $name;
        $this->age= $age;
        $this->class= $class;

        // function getName(){
        //     return $this->name;
        // }
        // function setName(): void{
        //     $this->name;
        // }

    }
    function __set($prop, $value){
         $this->$prop = $value;

    }   
    function __get($prop){
        return strtoupper($this->$prop);
   }

}
$obj = new Student("knn",15, 10);

$obj->name = 'roman';
echo $obj->name;






// =======================================




class Student1 {
    private $name;
    private $age;
    private $class;

    // Constructor to initialize the properties
    function __construct($name, $age, $class) {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // Magic setter method to modify private properties
    function __set($prop, $value) {
        if (property_exists($this, $prop)) {
            $this->$prop = $value;
        }
    }   

    // Magic getter method to retrieve private properties
    function __get($prop) {
        if (property_exists($this, $prop)) {
            return $this->$prop;  // Return the property value
        }
        return null;
    }
}
$obj1 = new Student1("knn", 15, 10);

// Use the __set() method to change the private property 'name'
$obj1->name = 'roman';

// Use the __get() method to access the private property 'name'
echo $obj1->name;  // Output: roman













