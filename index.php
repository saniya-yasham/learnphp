<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- loosed typed -->

    <?php
    // $myName = false;  //true|false, 1|0

    // $x = ["text", 10, 10.25, true]; //array
    // $person = [
    //     "name" => "text",
    //     "roll" => 10
    // ]; //associative array
    ?>


    <?php

    // $x = 10;
    // $x = $x + 1;
    // $x += 5;

    // echo ++$x; 
    //$x = $x + 1; increment/ pre/post,
    // echo $x;


    // if (true && false && true && true) {
    //     echo "If statement ran";
    // }

    // if (true || false) {
    //     echo "If statement ran";
    // }

    // if (!true) {
    //     echo "If statement ran";
    // }

    // if (false) {
    //     echo "If statement ran";
    // } else {
    //     echo "else statement ran";
    // }





    //concatination operation

    // $x = "mango";
    // echo "Yellow $x and its apple";
    ?>

    <!-- DAY 4 -->
    <!-- /*  ------------------------------------------------------------------- Question ------------------------------------------------------------------- */
    Write a PHP program to check if a student is pass or fail.
    1. Print "Pass" if the marks are 40 or more, otherwise print "Fail"
    $marks = 40;
    /* ----------------------------------------------------------------- End Question ----------------------------------------------------------------- */ -->
    <?php
    $marks = 10;
    // block scope
    // if ($marks >= 40) {
    //     echo "Pass";
    // } else {
    //     echo "Fail";
    // }

    // Ternary operator
    // (condition) ? true : false
    // echo ($marks >= 40) ? "Pass" : "Fail";

    // if ($marks >= 90) {
    //     echo "Grade: A";
    // } elseif ($marks >= 75) {
    //     echo "Grade: B";
    // } elseif ($marks >= 60) {
    //     echo "Grade: C";
    // } elseif ($marks >= 40) {
    //     echo "Grade: D";
    // } else {
    //     echo "Grade: Fail";
    // }


    // $marks = 40;
    // $student = true;
    // // if student is not null, and if  student is true
    // if ($student) {
    //     //nested if()
    // } else {
    //     echo "You are not a student";
    // }

    // $day = 3;

    // switch ($day) {
    //     case 1:
    //         echo "Day is Monday";
    //         break;

    //     case 2:
    //         echo "Day is Tuesday";
    //         break;

    //     case 3:
    //         echo "Day is Wednesday";
    //         break;

    //     default:
    //         echo "Day number doesnt exist";
    // }


    /* ------------------------------------------------------------------------------------------------------------------------------------------------ */
    /*                                                                       Day 5                                                                      */
    /* ------------------------------------------------------------------------------------------------------------------------------------------------ */

    // while("as long as this expression is true"){

    // }

    // $i = 1;
    // while ($i < 5) {
    //     echo "loop $i <br>";
    //     $i++; // $i = $i + 1
    // }

    // for($i=0; $i<10; $i += 2){
    //     echo "Iteration = $i <br>";
    // }

    // print_r($fruit);


    // $fruits = ["Mango", "Apple", "Kiwi", "New fruit"];

    // for ($i = 0; $i < count($fruits); $i++) {
    //     echo $fruits[$i] . "<br />";
    // }

    // foreach ($fruits as $fruit) {
    //     echo $fruit . "<br/>";
    // }

    $x = 10;

    // scoping
    // 1. global
    // 2. local
    // 3. static

    // $z = 100;
    // echo " Global scope =  $z";

    function welcomeUser()
    {
        $sum = 50;
        echo "Local scope = $" . "<br>";
    }

    ?>


</body>

</html>