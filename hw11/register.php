<?php

if (
    isset($_GET['name']) && isset($_GET['last_name']) && isset($_GET['gender']) && isset($_GET['email'])
    && isset($_GET['password']) && (isset($_GET['re_password']) && isset($_GET['courses']))
) {
    $ime = $_GET['name'];
    $prezime = $_GET['last_name'];
    $pol = $_GET['gender'];
    $email = $_GET['email'];
    $lozinka = $_GET['password'];
    $lista_kurseva = $_GET['courses'];
    echo "$pol $ime $prezime, uspesno ste se registrovali na nasem sajtu. <br>
    Vasa lozinka je: $lozinka <br>
    Vas username je $email <br>
    Vasi odabrani kursevi su: $lista_kurseva.";
} else {
    $ime = "";
    $prezime = "";
    $pol = "";
    $email = "";
    $lozinka = "";
    $lista_kurseva = "";
    echo "Niste pravilno popunili podatke";
}
