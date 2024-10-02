<?php
use PHPUnit\Framework\TestCase;

class SampleTestTwo extends TestCase{

    private $str1 = "hellow world";

    private   $str2 = "hellow world";

    function testTwoString(){

        $this->assertSame($this->str1, $this->str2);

    }

}