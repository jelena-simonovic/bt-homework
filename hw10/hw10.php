<?php

// Prvi zadatak

$first = 200;
$second = 80;

echo "Zbir: " . $first + $second . "<br>" .
    "Proizvod: " . $first * $second . "<br>" .
    "Razlika (prvi - drugi broj): " . $first - $second . "<br>" .
    "Razlika (drugi - prvi broj): " . $second - $first . "<br>" .
    "Kolicnik (prvi / drugi broj): " . $first / $second . "<br>" .
    "Kolicnik (drugi / prvi broj): " . $second / $first . "<br>";

echo "<br>";
// Drugi zadatak

$num = rand(0, 6);

if ($num == 0) {
    echo "Danas je ponedeljak!";
} else if ($num == 1) {
    echo "Danas je utorak!";
} else if ($num == 2) {
    echo "Danas je sreda!";
} else if ($num == 3) {
    echo "Danas je cetvrtak!";
} else if ($num == 4) {
    echo "Danas je petak!";
} else if ($num == 5) {
    echo "Danas je subota!";
} else if ($num == 6) {
    echo "Danas je nedelja!";
}

echo "<br>" . "<br>";

// Treci zadatak 

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Zbir brojeva " . $a . " , " . $b . " i " . $c . " je: " .
    $a + $b + $c . ".";
