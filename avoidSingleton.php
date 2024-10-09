<?php 
/*
Avoid using the Singleton pattern but still want to ensure that only one instance of a class is used throughout your application, 
you can manage the instance at a higher level, 
such as in a dependency injection container 
or 
by using global variables
*/

// ========================== Global Variable
class MyClass {
    public function someMethod() {
        echo "Executing some method.";
    }
}
// Create the instance and store it in a global variable
$myClassInstance = new MyClass();

$myClassInstance->someMethod();


// ========================== Dependency Injection
class MyClass1 {
    public function someMethod() {
        echo "Executing some method.";
    }
}
class Consumer {
    private $myClass;
    public function __construct(MyClass1 $myClass) {
        $this->myClass = $myClass;
    }
    public function useMyClass() {
        $this->myClass->someMethod();
    }
}
// Create the instance
$myClassInstance1 = new MyClass1();

// Inject the instance into the consumer
$consumer = new Consumer($myClassInstance1);
$consumer->useMyClass();


// ========================== Dependency Injection without Singleton
class Logger {
    public function log($message) {
        echo "Log: $message\n";
    }
}
class UserService {
    private $logger;
    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function createUser($username) {
        $this->logger->log("User '{$username}' created.");
    }
}
// Create a Logger instance
$logger = new Logger();

// Create a UserService instance, injecting the Logger
$userService = new UserService($logger);

// Use the UserService
$userService->createUser("john_doe");
