<?php 

trait Loggable {
    public function log($message) {
        echo "Log: $message\n";
    }
}
trait Timestampable {
    public function timestamp() {
        echo "Timestamp: " . date('Y-m-d H:i:s') . "\n";
    }
}
class ExampleClass {
    use Loggable, Timestampable;
}
$example = new ExampleClass();
$example->log("This is a log message");
$example->timestamp();

// =============================================

trait Reader{
    public function add($var1,$var2){
       return $var1+$var2;
    }
 }
 trait writer {
    public function multiplication($var1,$var2){
       return $var1*$var2;
    }
 }
 class File {
    use Reader;
    use writer;
    public function calculate($var1,$var2){
       echo "Ressult of addition:".$this->add($var1,$var2) .">br<";
       echo "Ressult of multiplication:".$this->multiplication($var1,$var2);
    }
 }
 $o = new File();
 $o->calculate(5,3);


//  ================================================
trait hello {
    public function message1() {
      echo "Nature is precious,\n";
    }
  }
  
  trait world{
    public function message2() {
      echo "So Let us unite to preserve it";
    }
  }
  
  class InUnity {
    use hello;
  }
  
  class WeCan {
    use hello, world;
  }
  
  $obj = new InUnity();
  $obj->message1();
  echo "****************\n";
  $obj2 = new WeCan();
  $obj2->message1();
  $obj2->message2();

//   ===========================================

trait SayHello {
    private function sayHello() {
       echo 'Hello!';
    }
 }
 class MyClass {
    use SayHello {sayHello as public hello; }
 }
 $myClass = new MyClass();
 $myClass->hello(); // Prints: "Hello!"; 
// =====================================================


