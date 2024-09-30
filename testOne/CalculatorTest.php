<?php

use PHPUnit\Framework\TestCase;

require("src/Calculator.php");
class CalculatorTest extends TestCase{

    private $calc;
    public function setUp():void{
        $this->calc = new Calculator();
    }

    function testAddtion(): void{
        $result = $this-> calc->add(22,3);
        $this->assertEquals(26 , $result);
    }

    function testSubtract(): void{
        $result = $this-> calc->subtract(30,10);
        $this->assertEquals(20 , $result);
    }

    function testDivid(): void{
        $result = $this-> calc->divid(2,2);
        $this->assertEquals(1 , $result);
    }

    function testMultiple(): void{
        $result = $this-> calc->multiple(2,2,2);
        $this->assertEquals(8, $result);
    }

}