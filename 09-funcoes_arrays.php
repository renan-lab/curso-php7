<?php
$names = array("Renan", "Felipe", "Maria", "José");
echo in_array("Renan", $names);
echo "<br>";

$keys = array_keys($names);
print_r($keys);
echo "<br>";

$cars = array("Camaro", "Uno", "Gol");
$motorcycles = array("Pop100", "50cc", "CB1000");
$vehicles = array_merge($cars, $motorcycles);
print_r($vehicles);
echo "<br>";

array_push($cars, "Fiat", "Golf");
print_r($cars);
echo "<br>";
 
$date = "15/06/2023";
$newDate = explode("/", $date);
print_r($newDate);
echo "<br>";

$string = implode(", ", $names);
echo $string;