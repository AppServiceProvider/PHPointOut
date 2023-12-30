<?php 
class Cal {
    public $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum() {
        echo $this->a + $this->b;
    }
    public function __invoke(){
        $this->sum();
    }
}

$obj = new Cal(10, 54);
// $obj->sum();
$obj();
