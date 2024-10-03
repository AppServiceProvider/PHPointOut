<?php
interface baseDisplayName{
    function display();
}

class childClass implements baseDisplayName{
    private $name;
    
    function __construct($name){
        $this->name=$name;
    }
    function display(){
        echo "hellow ". $this->name;
    }
}

class display{
    function displayFun($name){
        $obj= new childClass($name);
        $obj->display();
    }
}

$obj= new display();
$obj->displayFun("AppServiceProvider");
