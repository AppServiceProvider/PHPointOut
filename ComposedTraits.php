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
trait Authenticatable {
    public function authenticate() {
        echo "Authenticated!\n";
    }
}
class ComposedClass {
    use Loggable, Timestampable, Authenticatable;
    public function performAction() {
        $this->log("Action performed");
        $this->timestamp();
        $this->authenticate();
        echo "Action complete\n";
    }
}
$composedObject = new ComposedClass();
$composedObject->performAction();
/*
Log: Action performed
Timestamp: 2024-01-01 09:15:34
Authenticated!
Action complete
*/