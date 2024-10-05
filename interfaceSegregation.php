<?php 

/*
interface Vehicle{
    function price();
    function color();
    function name();
    function twoWheelers();
    function fourWheelers();
}
*/


interface Vehicle{
    function price();
    function color();
    function name();
}
interface TwoWheelers{
    function twoWheelers();
}

interface FourWheelers{
    function fourWheelers();
}

class MotorCycle implements Vehicle , TwoWheelers{
    function price(){}
    function color(){}
    function name(){}
    function twoWheelers(){}

}

class Truck implements Vehicle , FourWheelers{
    function price(){}
    function color(){}
    function name(){}
    function fourWheelers(){}

}