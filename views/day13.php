<?php
@include_once('layouts/header.php');
@include_once("../model/courses.php"); //data
@include_once("../controllers/day13Controller.php");


// CLASS
// reusability
// encapsulation 


// class ClassName {}

// object
// $obj = new ClassName();

class Poha
{

    public $salt = "Regular Salt"; //property = anywhere
    protected $spices = "Turmeric"; //property = within class, subclasses
    private $secretSpice = "Anything"; //property = within class

    public $type = "Im property"; //property

    public function __construct($color) // contructor call themselves automatically whenever a obj is created
    {
        $this->type = $color;
        // $this->adhaarNumber = $adhaar;
    }

    // methods
    public function describe() //variable
    {
        echo "This is $this->type Poha";
    }
}

$obj1 = new Poha("Yellow"); //contructor called
$obj2 = new Poha("Green"); //contructor called

echo $obj1->describe();
echo $obj2->describe();

// echo "<br> Type = " . $obj->type;


@include_once('layouts/footer.php');
