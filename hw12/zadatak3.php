<?php


$skup = range(0, rand(0, 200));

$zbir = array_sum($skup);

echo "Zbir prvih " . end($skup) . " prirodnih brojeva je: $zbir.";
