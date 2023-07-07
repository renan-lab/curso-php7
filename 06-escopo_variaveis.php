<?php
// escopo global
$name = "Renan";
$a = 1;
$b = 3;
$c = 7;

function getName() {
    // escopo local
    global $name;
    echo $name;
}

getName();
echo "<hr>";
////////////////////////////////
function getCity() {
    global $city;
    $city = "Rio de Janeiro";
}

getCity();
echo $city;
echo "<hr>";
////////////////////////////////
function sum() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

sum();