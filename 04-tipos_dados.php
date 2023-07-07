<?php
/* Escalares */
// string
$name = 'Renan';
var_dump($name);
echo "<br>";
if (is_string($name))
    echo "é string";
else
    echo "não é string";
echo "<hr>";

// int
$age = 19;
var_dump($age);
echo "<br>";
if (is_int($age))
    echo "é int";
else
    echo "não é int";
echo "<hr>";

// float
$height = 1.74;
var_dump($height);
echo "<br>";
if (is_float($height))
    echo "é float";
else
    echo "não é float";
echo "<hr>";

// boolean
$admin = false;
var_dump($admin);
echo "<br>";
if (is_bool($admin))
    echo "é boolean";
else
    echo "não é boolean";
echo "<hr>";


/* Compostos */
// array
$cars = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($cars);
echo "<hr>";

// object
class Customer {
    public $name;
    public function setName($name) {
        $this->$name = $name;
    }
}

$customer = new Customer();
$customer->setName("Renan");
var_dump($customer);
echo "<hr>";


/* Especiais */

// null
$city = null;
var_dump($city);