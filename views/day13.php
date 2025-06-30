<?php
@include_once('layouts/header.php');
@include_once("../model/courses.php"); //data
@include_once("../controllers/day13Controller.php");

// Logic is written in controller file controllers/day13Controller.php

$obj1 = new Poha("Yellow"); //contructor called
$obj2 = new Poha("Green"); //contructor called

echo $obj1->describe();
echo $obj2->describe();

// echo "<br> Type = " . $obj->type;


@include_once('layouts/footer.php');
