<?php
interface baseDisplayName{
    function display();
}

class childDisplay implements baseDisplayName{
    private $name;
    
    function __construct($name){
        $this->name=$name;
    }
    function display(){
        echo "hellow ". $this->name;
    }
}

// class display{
//     function displayFun($name){
//         $obj= new childClass($name);
//         $obj->display();
//     }
// }


class display{
    function displayFun(childDisplay $childClass){
       $childClass->display();
    }
}

$obj1 = new childDisplay('jon doe');
$obj= new display();
$obj->displayFun($obj1);
