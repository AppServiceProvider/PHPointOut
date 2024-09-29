<?php

use PHPUnit\Framework\TestCase;

require("src/Calculator.php");
class CalculatorTest extends TestCase{

    private $calc;
    public function setUp():void{
        $this->calc = new Calculator();
    }

    function testAddtion(): void{
        $result = $this-> calc->add(2,3);
        $this->assertEquals(5 , $result);
    }

}


















