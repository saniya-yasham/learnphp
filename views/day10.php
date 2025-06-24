<?php
@include_once('layouts/header.php');
@include_once("../model/courses.php"); //data
@include_once("../controllers/day10Controller.php")

// @require
?>



<?php

// function filter($items, $key, $filter)
// {
//     $filteredCourses = [];
//     foreach ($items as $item) {
//         if ($item[$key] == $filter) {
//             $filteredCourses[] = $item;
//         }
//     }

//     return $filteredCourses;
// }


//an. fn
// 1. ()()
// 2. variable assign

// (function () {
//     echo "IM an. fn";
// })();


// $condition = function($item){ return $item["price"] < 300; }

// $condition($item);





// function filter($items, $condition)
// {
//     $filteredCourses = [];
//     foreach ($items as $item) {
//         if ($condition($item)) {
//             $filteredCourses[] = $item;
//         }
//     }

//     return $filteredCourses;
// }

// array_filter($array, $callback fn);

//anonymous function, callback
$priceCourses = array_filter(
    $courses,
    function ($item) {
        return $item["price"] < 300;
    }
);

renderCourses("Price < 300", $priceCourses);







$securityCourses = filterByCategory($courses, "Security");
$designCourses = filterByCategory($courses, "Design");




//view
renderCourses("Security Courses", $securityCourses);
renderCourses("Design Courses", $designCourses);

?>





<?php
@include_once('layouts/footer.php');
?>