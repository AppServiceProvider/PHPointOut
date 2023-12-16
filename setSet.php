<?php
class abc{
    private $data =["name"=>"roman", "course"=>"php"];
    public function __get($property){
        echo "you are trying to access private property ($property)";
    }
}
$test =new abc();
$test->name; //you are trying to access private property (name)


class abc1 {
    private $data = ["name" => "roman", "course" => "php"];

    public function __get($property) {
        if (array_key_exists($property, $this->data)) {  //array_key_exists(key(rq), array(rq))
            return $this->data[$property];
        } else {
            return "You are trying to access a private property ($property)";
        }
    }
}

$test = new abc1();
echo $test->name;


// ===================================
class MyClass
{
  private $data = [];
  public function __get($name)
  {
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }
  }
  public function __set($name, $value)
  {
    $this->data[$name] = $value;
  }
}
$obj = new MyClass();
$obj->foo = 'bar'; 
echo $obj->foo; // bar
// ===========================================
class secondClass
{
  private $data = ["name" => "roman", "course" => "php"];
  public function __get($key)
  {
    if (array_key_exists($key, $this->data)) {
      return $this->data[$key];
    }else{
        return "This key ($key) is not defined";
    }
  }
}
$obj = new secondClass();
echo $obj->name;



class Person {
    private $data = ["name" => "roman", "course" => "php"];

    public function getName($property) {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        } else {
            return "You are trying to access a private property ($property)";
        }
    }
}
$person = new Person();
$course = $person->getName('course');
echo $course;
// =========================================================
class Person1{
  private $name;
  public function setName($name){
     $this->name = $name;
  }
  public function getName(){
     return $this->name;
  }
}
$person = new Person1();
$person->setName('Alex');
$name = $person->getName();
echo $name;  //Alex