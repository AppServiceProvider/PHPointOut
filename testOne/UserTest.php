<?php 
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    function testSayHi(){
        $user = new App\Model\User();
        $result = $user->sayHi();

        $this->assertEquals("hellow world hi", $result); // ./vendor/bin/phpunit testOne/UserTest.php


    }
}