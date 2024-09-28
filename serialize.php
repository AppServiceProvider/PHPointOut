<?php 


class SimpleClass {
    public $name;
    public $age;
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  }
  $originalObject = new SimpleClass("Alice", 30);
  $serializedObject = serialize($originalObject);
  $deserializedObject = unserialize($serializedObject);
  echo $deserializedObject->name . "\n"; // Name: Alice
  echo $deserializedObject->age . "\n";  // Age: 30


/* ===========================================================================
  Serialize: The serialize() function converts the object into a string representation.
  Deserialize: The unserialize() function takes the serialized string and converts it back into an object.
  */
  class SimpleClass1 {
    public $name;
    public $age;
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  }
  $originalObject1 = new SimpleClass1("Alice", 30);
  $serializedObject1 = serialize($originalObject1);
  echo $serializedObject1 . "\n";
  $deserializedObject1 = unserialize($serializedObject1);
  echo $deserializedObject1->name . "\n"; // Name: Alice
  echo $deserializedObject1->age . "\n";  // Age: 30




//   ===================================
  class SimpleClass2{
    public $name;
    public $age;
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  }
  $originalObject2 = new SimpleClass2("Alice", 30);
  $serializedObject2 = serialize($originalObject2);
  // echo $serializedObject . "\n";
  print_r($serializedObject2); // O:11:"SimpleClass":2:{s:4:"name";s:5:"Alice";s:3:"age";i:30;}SimpleClass Object
  $deserializedObject2 = unserialize($serializedObject2);
  print_r($deserializedObject2);  //([name] => Alice [age] => 30)