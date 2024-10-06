<?php 
class Sodium{
    static function addForm():Sodium{
        echo "hi ";
       return new self();  
    }
    function addColums():Sodium{
        echo "hellow";
        return $this;

    }
    function addFields():Sodium{
        echo "world";
        return $this;

    }
}
Sodium::addForm()->addColums()->addFields();
