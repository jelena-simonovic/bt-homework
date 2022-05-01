<?php

if (empty($_GET['weight'])) {
    echo "Niste uneli tezinu. <br>";
} else {
    $tezina = $_GET['weight'];
}

if (empty($_GET['age'])) {
    echo "Niste uneli godine. <br>";
} else {
    $godine = $_GET['age'];
}

if (empty($_GET['activity'])) {
    echo "Niste uneli zanimanje. <br>";
} else {
    $aktivnost = strtolower($_GET['activity']);
}

$faktorSta = 0;
$faktorAkt = 0;
$maxCal = 0;


if (empty($godine)) {
    echo "<br>";
} else if ($godine >= 0 && $godine <= 3) {
    $faktorSta = 1.9;
} else if ($godine >= 4 && $godine <= 10) {
    $faktorSta = 1.5;
} else if ($godine >= 11 && $godine <= 18) {
    $faktorSta = 1.2;
} else if ($godine >= 19 && $godine <= 26) {
    $faktorSta = 1;
} else if ($godine >= 27 && $godine <= 30 || $godine >= 50 && $godine <= 60) {
    $faktorSta = 0.8;
} else if ($godine >= 31 && $godine <= 35 || $godine >= 45 && $godine <= 49) {
    $faktorSta = 0.7;
} else if ($godine >= 36 && $godine <= 44 || $godine > 60) {
    $faktorSta = 0.6;
}
if (empty($aktivnost)) {
    echo "<br>";
} else if ($aktivnost == "programer" || $aktivnost == "administrativni radnik" || $aktivnost == "menadzer") {
    $faktorAkt = 100;
} else if ($aktivnost == "policajac" || $aktivnost == "vojnik") {
    $faktorAkt = 200;
} else if ($aktivnost == "sportista") {
    $faktorAkt = 300;
} else {
    $faktorAkt = 150;
}

if (empty($tezina) || empty($godine) || empty($aktivnost)) {
    echo "Molimo, vratite se na prethodnu stranicu.";
} else {
    $maxCal = $tezina * $faktorAkt * $faktorSta;
    echo "Vas maksimalni preporuceni dnevni unos kalorija iznosi: $maxCal";
}
