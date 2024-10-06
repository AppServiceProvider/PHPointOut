<?php 
class Lazy {
    protected $operations = [];

    public function addOperation($operation) {
        $this->operations[] = $operation;
        return $this; // Return current object
    }

    public function execute() {
        foreach ($this->operations as $operation) {
            echo $operation;
        }
    }
}

$lazy = new Lazy();
echo $lazy->addOperation('op1')->addOperation('op2')->execute();