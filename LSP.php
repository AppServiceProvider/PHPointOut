<?php 

abstract class bird{
    abstract function eat();
    abstract function sleep();
}

abstract class flyingBird extends bird{
    abstract function fly();
}

abstract class walkingBird extends bird{
    abstract function walk();
}


class birdManager{
    function maintanceBird(bird $b){
        $b->eat();
        $b->sleep();
        // $b->fly();
    }
    function maintanceFlyingBird(flyingBird $b){
        $b->fly();
    }

    function maintanceWlkingBird(walkingBird $b){
        $b->walk();
    }
}

class eagle extends bird{
    public function eat() {
    }
    
    public function sleep() {
    }
    
    public function fly() {
    }
}

class penguin extends walkingBird {
    public function eat() {
    }
    
    public function sleep() {
    }
    
    public function walk() {
    }
}