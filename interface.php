<?php 

class DistrictColltection{
    private $district;
    // private $district=[];
    function __construct(){
        $this->district=[];
    }
    function add($district){
        array_push($this->district, $district);
    }
    function getDistrict(){
        return $this->district;
    }
}

$obj= new DistrictColltection();
$obj->add('dhaka');
$obj->add('ctg');
$obj->add('barisal');
// print_r($obj);



$allDis=$obj->getDistrict();
// print_r($allDis); //[ [0] => dhaka [1] => ctg [2] => barisal]
foreach($allDis as $value){
    // echo $value .PHP_EOL;
}

// ===================================

class DistrictColltection1 implements IteratorAggregate{
    private $district;
    // private $district=[];
    function __construct(){
        $this->district=[];
    }
    function add($district){
        array_push($this->district, $district);
    }
    function getDistrict(){
        return $this->district;
    }
    function getIterator(){
        return new ArrayIterator($this->district);
    }
}

$obj= new DistrictColltection1();
$obj->add('dhaka');
$obj->add('ctg');
$obj->add('barisal');



foreach($obj as $value){
    echo $value .PHP_EOL;
}





// ==============================================


class MyCollection implements IteratorAggregate {
    private $items = [];

    // Add item to collection
    public function add($item) {
        $this->items[] = $item;
    }

    // Implement getIterator method to return an iterator for $items
    public function getIterator(): Traversable {
        return new ArrayIterator($this->items);
    }
}

$collection = new MyCollection();
$collection->add('Item 1');
$collection->add('Item 2');
$collection->add('Item 3');

// Iterate over the collection
foreach ($collection as $item) {
    echo $item . PHP_EOL;
}
