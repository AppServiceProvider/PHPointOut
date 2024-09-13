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

echo PHP_EOL;
class A{
  private static $name;
  static $age;
  protected static $cell;
  static function sayHi(){
    self::$age=22222222222222222; // allow
    // $this::age=25; //error
    // $this->age=25; //error

    // $this->name= 'world'; //error
    self::$name= 'bangladesh';
    self::$cell=1933233574;
    echo "hellow first class A". self::$name. self::$cell;
  }
}

class B extends A{ 
  static function sayHi(){
    parent::$cell;
    echo "hellow first class B";
    parent::sayHi();
  }
}
B::sayHi();
echo B::$age;
// echo B::$cell; // error
// echo B::$name; //error

// =============================
class A1{
  static function echoName(){
       echo self::getName(); // A Class getName early buinding
       // echo static::getName();// B class getName //late buinding
   }
  static function getName(){
       return 'A Class getName ';
   }
}

class B1 extends A1{
      static function getName(){
      echo " B class getName";
   }
}
B1::echoName(); 