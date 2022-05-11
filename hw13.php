<?php

$length = rand(1, 10);
$width = rand(1, 10);
$radius = rand(1, 10);

function circle($radius)
{
    return (($radius * $radius) * pi());
}
function rectangle($length, $width)
{
    return ($length * $width);
}

function firstOne($length, $width)
{
    return (rectangle($length, $width) + circle($width / 2));
}

function combinedArea($length, $width, $radius)
{
    return (rectangle($length, $width) + circle($radius) + firstOne($length, $width));
}


$firstPool = number_format(firstOne($length, $width), 2);
$secondPool = number_format(circle($radius), 2);
$thirdPool = number_format(rectangle($length, $width), 2);
$totalArea = number_format(combinedArea($length, $width, $radius), 2);


echo "Povrsina prvog bazena je: $firstPool <br>";
echo "Povrsina drugog bazena je: $secondPool <br>";
echo "Povrsina treceg bazena je: $thirdPool <br>";
echo "Ukupna povrsina svih bazena je: $totalArea <br>";
