<?php 

class StringUtility{
    private $string;
    private $search;

    function __construct($string){
        $this->string = $string;
    }

    function search ($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        if(!isset($this->search)){
            throw new Exception('nothing to replace');
        }
        $this->string = str_replace($this->search, $string, $this->string);
        return $this;
    }

    function uppercase(){
        $this->string = strtoupper($this-> string);
        return $this;

    }
    function lowercase(){
        $this->string = strtolower($this-> string);
        return $this;

    }

    function print(){
        echo $this->string;
    }

}

$obj = new StringUtility("hellow world");

$obj 
->search("world")
->replace('earth')
->uppercase()
->print();

