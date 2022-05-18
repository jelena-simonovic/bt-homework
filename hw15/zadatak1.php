<?php
echo "Prvobitni niz: <br>";
$niz =  ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
print_r($niz);
echo "<br> <br>";

echo "Niz plus moje ime: <br>";
if (!in_array("Jelena", $niz)) {
    array_push($niz, "Jelena");
} else {
    die('Ime vec postoji!');
}
print_r($niz);
echo "<br> <br>";

echo "Niz plus rodjakino ime: <br>";
if (!in_array("Milica", $niz)) {
    array_splice($niz, 2, 0, "Milica");
} else {
    die('Ime vec postoji!');
}
print_r($niz);
echo "<br> <br>";

echo "Broj ucenika: " . count($niz);
echo "<br> <br>";

echo "Niz plus novo ime na pocetku: <br>";
if (!in_array("Novak", $niz)) {
    array_unshift($niz, "Novak");
} else {
    die('Ime vec postoji!');
}
print_r($niz);
echo "<br> <br>";

echo "Niz bez Danila: <br>";
$niz = array_diff($niz, ["Danilo"]);
print_r($niz);
echo "<br> <br>";

echo "Niz bez dupliranih clanova: <br>";
print_r(array_unique($niz));
