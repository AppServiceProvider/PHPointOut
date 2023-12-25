<?php
class View
{
    public function render()
    {
        echo "Rendering view";
    }
}

class ControllerWithComposition
{
    private $view;
    public function __construct($view)
    {
        $this->view = $view;
    }
    public function index()
    {
        $this->view->render('index');
    }
}

$a = new View();
$controllerWithComposition = new ControllerWithComposition($a);
$controllerWithComposition->index();