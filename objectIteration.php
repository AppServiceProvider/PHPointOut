<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       foreach ($this as $key => $value) { // will print  protected private property
           print "$key => $value\n";
       }
    }
}

$class = new MyClass();


foreach($class as $key => $value) { // will print without protected private property
    print "$key => $value\n";
}
echo "\n";


$class->iterateVisible();
