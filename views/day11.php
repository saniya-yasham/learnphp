<?php
@include_once('layouts/header.php');
@include_once("../model/courses.php"); //data
@include_once("../controllers/day10Controller.php");

//anonymous function
$priceCourses = array_filter(
    $courses,
    function ($item) {
        return $item["price"] < 300;
    }
);
$securityCourses = array_filter(
    $courses,
    function ($item) {
        return $item["category"] === "Security";
    }
);

$designCourses = array_filter(
    $courses,
    function ($item) {
        return $item["category"] === "Design";
    }
);
//view
renderCourses("Security Courses", $securityCourses);
renderCourses("Design Courses", $designCourses);

@include_once('layouts/footer.php');
