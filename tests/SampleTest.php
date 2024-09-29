<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase{

   public function testSomething(){
        $result =2+2;
        $this ->assertEquals(4, $result);
    }

    public function testAnotherThing(){
        $result =1;
        $this ->assertEquals(true, $result);
    }

}