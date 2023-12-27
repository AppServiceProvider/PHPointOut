# PHP note: Roman Hossain Shaon

### Dependency Injection Container (DIC) Installation:

Choose a DIC: Select one that suits your project (e.g., Symfony's DependencyInjection, PHP-DI, Pimple).

Install via Composer: Assuming you have Composer, run:

```Bash
composer require symfony/dependency-injection
```

2. Import Necessary Classes:
File paths: Adjust based on your DIC and project structure.
```
PHP
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
```

3. Instantiate ContainerBuilder:
```php
$containerBuilder = new ContainerBuilder();
```

4. Define Services:
Use Reference for dependencies:

```PHP
$containerBuilder->addDefinitions([
    'database' => Database::class,
    'user' => User::class,
]);
```

5. Resolve create() Function:
Remove or replace: If create() is from a DIC library, import and use it correctly. Otherwise, create instances directly:

```PHP
$containerBuilder->addDefinitions([
    // ...
    'user' => new User(new Reference('database')),
]);
```

```PHP
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

// ... your classes and other code

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions([
    'database' => Database::class,
    'user' => new User(new Reference('database')),
]);

// Build the container and use services
$container = $containerBuilder->build();
$user = $container->get(User::class);
// ...
Use code with caution. Learn more
```