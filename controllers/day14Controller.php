<?php

// public = everywhere , inside outside class
// protected = within class or within subclass (not outside the class)
// private = only within class

// define("RESTAURANT_NAME", "Burger King"); //constant

trait Servable
{
    function intro()
    {
        echo "I'm servable dish";
    }
}
trait Servable1
{
    function intro()
    {
        echo "I'm servable1 dish";
    }
}


class Poha //base class
{
    use Servable, Servable1;

    const RESTAURANT_NAME = "Burger King";

    public $salt = "Regular Salt";
    protected $spices = "Turmeric";
    private $secretSpice = "Anything";

    public $type = "property value";

    public function __construct($color)
    {
        $this->type = $color;
    }

    public function describe()
    {
        echo "inside describe methos , constant = " . self::RESTAURANT_NAME;
    }
    protected function protectedMethod()
    {
        echo "I'm a protected method";
    }
}

class HealthyPoha extends Poha
{
    use Servable;

    //    public/protected of Poha available here

    public function __construct() {} //overridden

    public function describe() //overridden
    {
        echo "Im child class = describe method";
    }

    public function callProtected()
    {
        $this->protectedMethod();
    }

    public function healthy() //new method
    {
        echo "This $this->spices is healthy method";
    }
}
