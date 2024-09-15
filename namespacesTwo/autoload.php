<?php

// Autoloader that converts namespace to file path
spl_autoload_register(function ($class) {
    // Replace namespace backslashes with directory slashes
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    // Add .php extension and require the file
    require_once $class . '.php';


    //               OR 
    // $class = str_replace('\\', '/', $class);
    // require_once __DIR__ . '/' . $class . '.php';
});

