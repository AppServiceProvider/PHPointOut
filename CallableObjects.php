<?php 



class MyCallbackClass {
    public function __invoke($arg1, $arg2) {
       echo "Callback class called with arguments: $arg1, $arg2";
    }
 }
 // Creating an instance of the callback class
 $callbackObj = new MyCallbackClass();
 
 // Using the callback object
 $callbackObj('Hello', 'World');