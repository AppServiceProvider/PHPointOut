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
echo $obj-> names;
echo $obj-> email;
echo $obj-> address;



