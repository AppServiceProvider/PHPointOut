<?php
interface baseDisplay{
    function display();
}

class childDisplay implements baseDisplay{
    private $name;
    
    function __construct($name){
        $this->name=$name;
    }
    function display(){
        echo "hellow ". $this->name;
    }
}

class display{
    function displayFun(baseDisplay $childClass){
       $childClass->display();
    }
}

$obj1 = new childDisplay('jon doe');
$obj= new display();
$obj->displayFun($obj1);
