<?php 

class Database
{ //Our dependency which is a Database class that connects to a given database:
    public function connect() {
    }
}
class User {
    //Our User class which depends on the Database object to connect to a given database
    private $database;
    public function __construct(Database $database) {
        $this->database = $database;
        $this->database->connect();
    }
}

$user = new User(new Database());  //Now we can create a User object and inject the Database dependency 
/*
We created a dependency, called Database. The Database dependency currently can only do one thing, which is connecting to a database.
We created a User class. This class can only do on thing, which is getting user data. In order to do this, the User class needs the Database dependency to connect to the database.
We created a User object, and passed a Database object (the dependency) to its constructor. By doing so, we’re injecting the Database dependency into the User object.
*/

