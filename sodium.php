<?php
// Interface declaration for fields
interface FieldInterface {
    function setId(): FieldInterface;
    function setLabel(): FieldInterface;
    function setDefault(): FieldInterface;
    function setValue(): FieldInterface;
}
// Abstract class implementing FieldInterface
abstract class AbstractField implements FieldInterface {
    public function setId(): FieldInterface {
        // Implementation of setting ID
        return $this;
    }
    
    public function setLabel(): FieldInterface {
        // Implementation of setting Label
        return $this;
    }
    
    public function setDefault(): FieldInterface {
        // Implementation of setting default value
        return $this;
    }
    
    public function setValue(): FieldInterface {
        // Implementation of setting value
        return $this;
    }
}













// Concrete classes extending AbstractField
class TextField extends AbstractField {
}

class Radio extends AbstractField {
}

// Factory class for creating fields 
class FieldFactory {
    public static function createTextField(): TextField {
        return new TextField();
    }
    public static function createRadio(): Radio {
        return new Radio();
    }
}












// Main form builder class
class Sodium {
    public static function addForm(): Sodium {
        // Implementation of adding form
        return new self();
    }
    
    public function addColums(): Sodium {
        // Implementation of adding columns
        return $this;
    }
    
    public function addFields(FieldInterface ...$fields): Sodium {
        // Loop through the fields and process them
        foreach ($fields as $field) {
            // Handle each field (e.g., add it to the form)
        }
        return $this;
    }
}

Sodium::addForm()->addColums()->addFields(
    FieldFactory::createTextField()->setId()->setDefault(),
    FieldFactory::createRadio()->setId()->setDefault()
);





Sodium::addForm()->addColums()->addFields(
    FieldFactory::createTextField()->setId()->setDefault(),
    FieldFactory::createRadio()->setId()->setDefault()
);