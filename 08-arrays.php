<?php
// arrays
$cars = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
print_r($cars);
echo "<br>";
echo $cars[2];
echo "<br>";
$cars[] = "Amarok";
$cars[10] = "Camaro";
print_r($cars);
echo "<hr>";

// count
echo count($cars);
echo "<hr>";

// foreach
foreach($cars as $car) {
    echo "$car<br>";
}
echo "<hr>";

// arrays associativos
$person = array("name"=>"Renan", "age"=>19, "height"=>1.74);
$person["city"] = "Jaú";
echo $person["name"];
echo "<br>";
print_r($person);
echo "<br>";
foreach ($person as $key => $value) {
    echo "$key:$value<br>";
}
echo "<hr>";

// arrays multidimensionais
$teams = array(
        "cariocas"=>array("Vasco", "Flamengo", "Botafogo"),
        "paulistas"=>array("Santos", "São Paulo", "Palmeiras"),
        "baianos"=>array("Bahia", "Vitória", "Itabuna"));
echo $teams["paulistas"][0];
echo "<br>";

foreach ($teams["cariocas"] as $key => $value) {
    echo "$key:$value<br>";
}
