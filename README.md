# To run tests in this directory
```bash
 ./vendor/bin/phpunit tests/
 ```
 

# testOne folder run test 
```bash
./vendor/bin/phpunit testOne
```




# composer dump-autoload
Diagram
```bash
src-
    Calculator.php namespace App;

testOne-
    App\Calculator();

composer.json-
         "autoload": {
        "psr-4":{
            "App\\":"src"
        }
    }      

terminal 
       composer dump-autoload
```

after use composer.json psr-4 than run cli
```bash
composer dump-autoload
```



# PHP UNit Test Install Step By Step

# Ensure PHPUnit is installed

```bash
composer require --dev phpunit/phpunit
```


# Autoload the Composer dependencies

```bash
require 'vendor/autoload.php'
```

# Verify your composer.json

```bash
{
    "require-dev": {
        "phpunit/phpunit": "^9.0" // or any compatible version
    }
}

```

# Check your PHPUnit version:
If you're using PHP 8 or above, make sure you have PHPUnit 9.x installed, as older versions of PHPUnit are not compatible with PHP 8.

# Run PHPUnit using the vendor binary:

```bash
./vendor/bin/phpunit --filter SamplTest
```



# Example test

```bash
<?php
use PHPUnit\Framework\TestCase;

class SamplTest extends TestCase
{
    public function testSample()
    {
        $this->assertTrue(true);
    }
}
```

# Global Installation (Alternative):

```bash
composer global require phpunit/phpunit
```
