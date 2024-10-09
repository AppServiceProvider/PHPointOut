<?php 

class A{
    private static $name;
    function __construct($name){
        self::$name=$name;
    }
    static function aFun($name){
      return new self($name); 
    }
      function exFun(){
        return self::$name." world";
    }
}
$a= A::aFun('hellow');
echo $a->exFun();