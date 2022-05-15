<?php

if (empty($_GET['day']) || !is_numeric($_GET['day'])) {
    die('Day has not been properly set.');
}
if (empty($_GET['month']) || !is_numeric($_GET['month'])) {
    die('Month has not been properly set.');
}
if (empty($_GET['year']) || !is_numeric($_GET['year'])) {
    die('Year has not been properly set.');
}

$day = $_GET['day'];
$month = $_GET['month'];
$year = $_GET['year'];

if (checkdate($month, $day, $year)) {
    $date = $day . "/" . $month . "/" . $year;
    echo "The date you chose is: $date.";
} else {
    echo "Not a valid date.";
}

// Ne ide pre nove ere, ne uracunava diskrepance u kalendarima i lokalitetima