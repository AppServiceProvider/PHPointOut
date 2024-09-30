<?php 


class Calculator {
    function add( ...$spread){
        return array_sum($spread);
    }

    function subtract($a, $b){
        return $a - $b;
    }

    function multiple( ...$spread){
        return array_product($spread);
    }

    function divid($a, $b){
        return $a / $b;    }

}