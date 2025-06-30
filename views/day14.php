<?php
@include_once('layouts/header.php');
@include_once("../model/courses.php"); //data
@include_once("../controllers/day14Controller.php");

$parentClass = new Poha("Yellow");
echo $parentClass->describe();
// echo $parentClass->

echo "<br />" .  Poha::RESTAURANT_NAME;

// $obj2 = new Poha("Green");

// echo $parentClass->spices;
// echo $obj2->describe();


// $healthy = new HealthyPoha();

// // echo $healthy->salt; // public properties
// echo $healthy->healthy();
// echo "<br />" . $healthy->describe();
// echo "<br />" . $healthy->callProtected();


@include_once('layouts/footer.php');
