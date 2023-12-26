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