<?php
// Single Argument call / list argument call 
class Demo {
    private $propertyVar = [];
    function demofun(...$para) {
        foreach ($para as $value) {
                $this->propertyVar = array_merge($this->propertyVar, $value);
        }
        return $this;
    }
    function properEx() {
        foreach ($this->propertyVar as $value) {
            echo $value;
        }
    }
}
(new Demo())->demofun(['she', 'he'],['mr', 'mrs'])->demofun(['hh', 'he'],['mr', 'mrs'])->properEx();