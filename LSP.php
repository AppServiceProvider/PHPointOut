<?php 

abstract class bird{
    abstract function eat();
    abstract function sleep();
    abstract function fly();
}

class birdManager{
    function maintanceBird(bird $b){
        $b->eat();
        $b->sleep();
        $b->fly();
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

class penguin extends bird{
    public function eat() {
    }
    
    public function sleep() {
    }
    
    public function fly() {
        // walk the bird
    }
}