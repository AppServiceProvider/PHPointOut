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
    echo $value .PHP_EOL;
}

