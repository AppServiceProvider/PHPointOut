<?php
class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  // Call static method
  greeting::welcome();

//   ===================================================
  class greeting1 {
    public static function welcome() {
      echo "Hello World!";
    }
    public function __construct() {
      self::welcome();
    }
  }
  new greeting1();

  //   ========================================

  class pi1 {
    public static $value = 3.14159;
  }
  // Get static property
  echo pi1::$value;
  
  //   ========================================

  class pi {    
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  $pi = new pi();
  echo $pi->staticValue();

  // ===========================================

  define ('OK', 123);
  class MyClass{
    const CITY = 'Dhaka';
    function sayHi(){
      // echo 'hi'. $this::CITY; //কনস্ট্যান্ট সবসময় স্ট্যাটিক স্কোপে থাকে
      echo 'hi'. self::CITY; //কনস্ট্যান্ট সবসময় স্ট্যাটিক স্কোপে থাকে

    }
  }

$obj= new MyClass();
// echo $obj::CITY; //Dhaka
// echo $obj->sayHi(); //Hi Dhaka

echo MyClass::CITY; //Dhaka

// ===============================================