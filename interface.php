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

class improveChildClass implements baseDisplay{
    private $name;

    private $title;
    
    function __construct($name, $title){
        $this->name=$name;
        $this->title= $title;
    }
    function display(){
        echo $this->title .' '. $this->name;
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

echo PHP_EOL;
// ---------------

$obj2 = new improveChildClass('joh doe', 'Mr');
$ob= new display();
$ob->displayFun($obj2);