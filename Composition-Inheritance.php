<?php
class Visit
{
    public function setInActiveVisit()
    {
        echo 'The user is currently in an active visit';
    }
}
class Patient extends Visit
{
    public function callTheDoctor()
    {
        // Set the user in active visit
        $this->setInActiveVisit(); 
    }
}
class Doctor extends Visit
{
    public function acceptPatientCall()
    {
        // Set the user in active visit
        $this->setInActiveVisit(); 
    }
}
$patient = new Patient();
$patient->callTheDoctor();

$doctor = new Doctor();
$doctor->acceptPatientCall();


// =====================================================
class Visit1
{    
    public function setInActiveVisit()
    {
        echo 'The user is currently in an active visit';
    }    
}
class Patient1
{
    public function __construct(public readonly Visit1 $visit2)
    {}
    public function callTheDoctor()
    {
        // Set the user in active visit
        $this->visit2->setInActiveVisit();    
    }
}
// class Doctor1
// {
//     public function __construct(public readonly Visit1 $visit3)
//     {}
//     public function acceptPatientCall()
//     {
//         // Set the user in active visit
//         $this->visit3->setInActiveVisit();    
//     }
// }
$visit20 = new Visit1();
$patient = new Patient1($visit20);
$patient->callTheDoctor();
 
// $visit30 = new Visit1();
// $patient = new Doctor1($visit30);
// $patient->acceptPatientCall();

// -----------------------------------------------
class Author {
    // Private properties
    private $name;
    private $email;
    // Constructor to initialize properties
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    // Getter method for name
    public function getName() {
        return $this->name;
    }
    // Getter method for email
    public function getEmail() {
        return $this->email;
    }
}
// Create an Author object
$author = new Author("John Doe", "john.doe@example.com");

// Accessing properties using getter methods
echo "Author Name: " . $author->getName() . "\n";  //Author Name: John Doe
echo "Author Email: " . $author->getEmail() . "\n"; //Author Email: john.doe@example.com

// ========================================================================

class Book {
    private $authors = array();
    private $price;
    private $name;
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getName() {
        return $this->name;
    }
    public function addAuthor($author) {
        $this->authors[] = $author;
    }
    public function getAuthors() {
        return $this->authors;
    }
}
class Author1 {
    private $name;
    private $email;
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
}
$ken = new Author1('Ken', 'ken@brainbell.com');
$kelly = new Author1('Kelly', 'kelly@brainbell.com');

$book = new Book('My PHP Book', 10.0);
$book->addAuthor($ken);
$book->addAuthor($kelly);
# Print book info
echo "Book Name: " . $book->getName() . "\n"; //Book Name: My PHP Book
echo "Book Price: $" . $book->getPrice() . "\n"; //Book Price: $10
# Print book's authors info
$authors = $book->getAuthors(); // Array of authors
foreach ($authors as $author) {
    echo " - Name: " . $author->getName() . "\n";
    echo "   Email: " . $author->getEmail() . "\n";
    /* 
    - Name: Ken
    Email: ken@brainbell.com
  - Name: Kelly
    Email: kelly@brainbell.com
    */
}

// ====================================================
class View
{
    public function render($name)
    {
        echo "Rendering view $name";
    }
}
class ControllerWithInheritance extends View
{
    public function index()
    {
        $this->render('index');
    }
}
$controllerWithInheritance = new ControllerWithInheritance();
$controllerWithInheritance->index();// Rendering view index

// ====================================================



class View1
{
    public function render($name)
    {
        echo "Rendering view $name";
    }
}

class ControllerWithComposition
{
    private $viewProperty;

    public function __construct(View1 $viewArgument)
    {
        $this->viewProperty = $viewArgument;
    }

    public function index()
    {
        $this->viewProperty->render('index');
    }
}
$controllerWithComposition = new ControllerWithComposition(new View1());
$controllerWithComposition->index();





// ==========================without __construct=================================

class View11
{
    public function render($name)
    {
        echo "Rendering view $name";
    }
}

class ControllerWithComposition1
{
    private $viewProperty;

    public function setView(View11 $viewArgument)
    {
        $this->viewProperty = $viewArgument;
    }

    public function index()
    {
        $this->viewProperty->render('index');
    }
}

// Create instances
$viewInstance11 = new View11();
$controllerWithComposition = new ControllerWithComposition1();

// Set the View1 instance
$controllerWithComposition->setView($viewInstance11);

// Call the index method
$controllerWithComposition->index();

// ==============================================================