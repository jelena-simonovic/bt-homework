<?php

$dani = 0;

for ($puz = 3, $drvo = 100; $puz <= $drvo; $puz += 3, $drvo++) {
    $dani++;
    echo "Dan je: $dani. Puz je presao $puz cm, a drvo je visoko $drvo cm. <br>";
}

echo "<br>";

if ($drvo % $puz == 0) {
    echo "Puz se popeo na vrh drveta za $dani dana.";
} else {
    $vrh = $dani + 1;
    echo "Puz se popeo na vrh drveta za $vrh dana.";
}
