<?php

use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase{

    private $calc;
    public function setUp():void{
        $this->calc = new App\Calculator();
    }

    public static function dataProviderForAdd(){
        return [
            [4,2,6],
            [6,1,7],
            [7,7,14],
        ];
    }

    /** @dataProvider dataProviderForAdd */

    function testAddtion($a, $b, $expected): void{
        $result = $this-> calc->add($a, $b);
        $this->assertEquals($expected, $result);
    }


    // function testSubtract(): void{
    //     $result = $this-> calc->subtract(30,10);
    //     $this->assertEquals(20 , $result);
    // }

    // function testDivid(): void{
    //     $result = $this-> calc->divid(2,2);
    //     $this->assertEquals(1 , $result);
    // }

    // function testMultiple(): void{
    //     $result = $this-> calc->multiple(2,2,2);
    //     $this->assertEquals(8, $result);
    // }

}