<?php
@require('../database/connection.php');

@include_once('layouts/header.php');
@include_once("../model/Student.php"); //data
@include_once("../controllers/StudentController.php");

$student1 = new Student($conn);

var_dump($student1->all());