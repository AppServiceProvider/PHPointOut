<?php 
class User
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->database->connect();
    }

    public function doSomething()
    {
        echo "User is doing something.\n";
    }
}

class Database
{
    public function connect()
    {
        print('Connected to the database.' . PHP_EOL);
    }
}
$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions([
    'database' => create(Database::class),
    'user' => create(User::class),
]);
$container = $containerBuilder->build();
$user = $container->get(User::class);
$user->doSomething();
