<?php


$conn = new mysqli("localhost", "root", "", 'learnphp');

// var_dump($conn);

// not a truthy value: 0, false, [], "", null, undefined
if (!$conn) {
    echo "<h1>Failed</h1>";
}
