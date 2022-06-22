<?php
$bmw = [
    'model' => "X5",
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => "Alion",
    'speed' => 110,
    'doors' => 5,
    'year' => 2014
];

$opel = [
    'model' => "fl1",
    'speed' => 220,
    'doors' => 3,
    'year' => 2018
];

$cars["bmw"] = $bmw;
$cars["toyota"] = $toyota;
$cars["opel"] = $opel;

foreach ($cars as $carName => $car) {
    echo "CAR $carName<br>";
    $str = '';
    foreach ($car as $harac) {
        $str .= $harac . " - ";
    }
    echo substr($str, 0, -2) . "<br><br>";
}
