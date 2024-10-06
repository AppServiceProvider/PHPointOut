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




//================================================
$cars = array ( //two-dimensional array
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  
  print_r(array_merge(...$cars));
//===========
class Lazy1 {
    protected $operations = [];
    public function addOperation(...$operation) {
        // Merge the operations array into $this->operations
        $this->operations = array_merge($this->operations, $operation); //array_merge(rq array1, array2,array3...)
        return $this; // Return current object for chaining
    }
    public function execute() {
        foreach ($this->operations as $operation) {
            echo $operation;
        }
        return ""; // Return an empty string to avoid issues with echo
    }
}
$lazy = new Lazy1();
echo $lazy->addOperation('op1', 'op2', 'op3')->execute();
