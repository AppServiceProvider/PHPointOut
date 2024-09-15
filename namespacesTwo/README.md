### If you're not using an autoloader, you must explicitly include the PHP files

```bash
project/
│
├── index.php
|── autoload.php
├── Animals/
│   ├── Dog.php
│   └── Cat.php
└── Vehicles/
    └── Car.php
```
### ====================== Normal Project

project/
│
├── index.php/
                require_once 'Animals/Dog.php';
                require_once 'Animals/Cat.php';
                require_once 'Vehicles/Car.php';
├── Animals/
│   ├── Dog.php
│   └── Cat.php
└── Vehicles/
    └── Car.php
