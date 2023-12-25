<?php

class FirstClass{
    function abc($domModify){
        echo "hellow $domModify";
    }
}
class SecondClass extends FirstClass{
}
$a = new SecondClass();
$a-> abc("programmers");


// way second
class FirstClass1 {
    function abc($domModify) {
        echo "Hello $domModify";
    }
}
class SecondClass1 extends FirstClass1 {
    function SecondClassFunction() {
        // You need to provide the required argument when calling abc
        $this->abc("programmers");
    }
}
$a = new SecondClass1();
$a->SecondClassFunction();  // This will output: Hello programmers

// way third

class FirstClass2 {
    function abc($domModify) {
        echo "Hello $domModify";
    }
}

class SecondClass2 extends FirstClass2 {
    function SecondClassFunction2($secondFnArgument) {
        $this->abc($secondFnArgument);
    }
}

$a = new SecondClass2();
$a->SecondClassFunction2("programmer");  // Provide an argument for the method

// =================================================================

class FirstClass3 {
    function abc($domModify) {
        echo "Hello $domModify";
    }
}
class SecondClass3 extends FirstClass3 {
    private $argument;
    public function __construct($argument) {
        $this->argument = $argument;
    }
    function SecondClassFunction3() {
        $this->abc($this->argument);
    }
}
$a = new SecondClass3("programmers");
$a->SecondClassFunction3();  // This will output: Hello programmers

// =========================================================
class FirstClass4 {
    function abc($domModify) {
        echo "Hello $domModify";
    }
}
class SecondClass4 extends FirstClass4 {
    private $argument;
    function setVariable($argument) {
        $this->argument = $argument;
    }
    function SecondClassFunction3() {
        $this->abc($this->argument);
    }
}
$a = new SecondClass4();
$a->setVariable("programmers");
$a->SecondClassFunction3();
// ==================================================

class FirstClass5 {
    function abc($domModify) {
        echo "Hello $domModify";
    }
}
class SecondClass5 extends FirstClass5 {
    protected $argument;
    function setGet($argument) {
        $this->argument = $argument;
        $this->abc($argument);
    }
    // function setGet($argument) {
    //     $this->abc($argument);
    // }
}
$a = new SecondClass5();
$a->setGet("programmers");

// =================== Inheriteance ছাড়া একটা ক্লাসের ফাংশন অন্য একটা ক্লাসে ব্যবহার করতে হলে ===========================
class View
{
    public function render()
    {
        echo "Rendering view";
    }
}

class ControllerWithComposition{
    public function index()
    {
        $view = new View();
        $view->render();
    }
}

/*
class ControllerWithComposition
{
    public function index(View $view)
    {
        $view->render();
    }
}
$view = new View();
$controllerWithComposition = new ControllerWithComposition();
$controllerWithComposition->index($view);
*/

$controllerWithComposition = new ControllerWithComposition();
$controllerWithComposition->index();


class View1 // way two
{
    public function render($name)
    {
        echo "Rendering view $name";
    }
}
class ControllerWithCompo
{
    private $viewProperty;

    public function setView(View1 $viewArgument)
    {
        $this->viewProperty = $viewArgument;
    }

    public function index()
    {
        $this->viewProperty->render('index');
    }
}
// Create instances
$viewInstance = new View1();
$controllerWithComposition = new ControllerWithCompo();
// Set the View1 instance
$controllerWithComposition->setView($viewInstance);
// Call the index method
$controllerWithComposition->index();


class View4 // way three
{
    public function render($name)
    {
        echo "Rendering view $name";
    }
}
class ControllerWithCompos1
{
    private $viewProperty;

    public function __construct(View4 $viewArgument)
    {
        $this->viewProperty = $viewArgument;
    }
    public function index()
    {
        $this->viewProperty->render('index');
    }
}
// Create instances
$controllerWithComposition = new ControllerWithCompos1(new View4());
// Call the index method
$controllerWithComposition->index();


