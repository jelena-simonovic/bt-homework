<?php
if (isset($_GET['zid_sirina']) && !empty($_GET['zid_sirina'])) {
    $zid_sirina = $_GET['zid_sirina'];
} else {
    echo "Niste uneli sirinu zida. <br> ";
}

if (isset($_GET['zid_visina']) && !empty($_GET['zid_visina'])) {
    $zid_visina = $_GET['zid_visina'];
} else {
    echo "Niste uneli visinu zida. <br> ";
}

if (isset($_GET['plocica_sirina']) && !empty($_GET['plocica_sirina'])) {
    $plocica_sirina = $_GET['plocica_sirina'];
} else {
    echo "Niste uneli sirinu plocice. <br> ";
}

if (isset($_GET['plocica_visina']) && !empty($_GET['plocica_visina'])) {
    $plocica_visina = $_GET['plocica_visina'];
} else {
    echo "Niste uneli visinu plocice. <br> ";
}


if (isset($zid_sirina) && isset($zid_visina) && isset($plocica_sirina) && isset($plocica_visina)) {
    $broj_plocica = ($zid_sirina * $zid_visina * 10000) / ($plocica_sirina * $plocica_visina);
    echo "Bice vam neophodno $broj_plocica plocica da poplocate ceo zid.";
} else {
    echo "Vratite se na prethodnu stranu.";
}
