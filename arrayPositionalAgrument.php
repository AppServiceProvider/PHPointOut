<?php 
// Positional Agrument \ Seperate Argument
class Demo{
   private $propertyVar=[];
   function demofun(...$para){
    if (empty($para)) {
        throw new InvalidArgumentException("No arguments provided");
    }
    foreach ($para as $value) {
        if (!is_string($value)) {
            throw new InvalidArgumentException("Only strings are allowed.");
        }
        if (trim($value) === '') { // Check for empty string
            throw new InvalidArgumentException("Empty strings are not allowed.");
        }
        $this->propertyVar[] = $value;
    }
    return $this;
   }

   function exMethod(){
    foreach ($this->propertyVar as $vale){
        echo $vale;
    }
   }
}

try {
    (new Demo())->demofun('')
    ->exMethod();
} catch (InvalidArgumentException $e) {
    echo 'Exception: ' . $e->getMessage() . PHP_EOL;
}catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}