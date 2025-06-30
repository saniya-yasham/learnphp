<?php

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
