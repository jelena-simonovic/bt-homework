<?php
// Prvi nacin

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


// Drugi nacin

echo "<br> <br> Drugi nacin <br> <br>";

// Prvi zadatak

$first2 = 200;
$second2 = 80;

$bothArray = [$first2, $second2];

$add = array_sum($bothArray);
$multiply = array_product($bothArray);
$sub1 = $first2 - $second2;
$sub2 = $second2 - $first2;
$divide1 = $first2 / $second2;
$divide2 = $second2 / $first2;

echo "Zbir je $add, proizvod $multiply, razlike su $sub1 i $sub2, i kolicnici su $divide1 i $divide2";

// Drugi zadatak

echo "<br> <br>";

$num2 = 3;
$todayIs = "Danas je: ";

if ($num == 0) {
    echo "$todayIs ponedeljak!";
} else if ($num == 1) {
    echo "$todayIs utorak!";
} else if ($num == 2) {
    echo "$todayIs sreda!";
} else if ($num == 3) {
    echo "$todayIs cetvrtak!";
} else if ($num == 4) {
    echo "$todayIs petak!";
} else if ($num == 5) {
    echo "$todayIs subota!";
} else if ($num == 6) {
    echo "$todayIs nedelja!";
}

// Treci zadatak

echo "<br> <br>";

$a2 = 5;
$b2 = 8;
$c2 = 4;

$added = $a2 + $b2 + $c2;

echo "Zbir brojeva $a2, $b2 i $c2 je $added.";
