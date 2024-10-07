<?php 
// Positional Agrument \ Seperate Argument
class Demo{
   private $propertyVar=[];
   function demofun(...$para){
        foreach ($para as $value) {
        $this->propertyVar[]=$value;
        }
        return $this;
   }
   function exMethod(){
    foreach ($this->propertyVar as $vale){
        echo $vale;
    }
   }
}

(new Demo())->demofun('hellow','world','hi','hlw')
->exMethod();
