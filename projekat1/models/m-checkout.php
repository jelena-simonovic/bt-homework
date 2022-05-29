<?php

if (!empty($POST['name'])) {
    $name = trim($POST['name']);
} else {
    $nameError = "You have to enter your name.";
}

if (!empty($POST['last_name'])) {
    $last_name = trim($POST['last_name']);
} else {
    $lastNameError = "You have to enter your last name.";
}

if (!empty($_POST['email']) && str_contains($_POST['email'], "@")) {
    $email = trim($_POST['email']);
    $email = str_replace(' ', '', $email);
} else {
    $emailError = "You have to enter a valid email address.";
}

if (!empty($_POST['city'])) {
    $city = trim($_POST['city']);
} else {
    $cityError = "You have to enter your city.";
}

if (
    !empty($_POST['phone']) && is_numeric($_POST['phone'])
    && (strlen($_POST['phone']) >= 9)
    && (strlen($_POST['phone']) <= 11)
) {
    $phone = trim($_POST['phone']);
} else {
    $phoneError = "You have to enter a valid phone number.";
}

if (!empty($_POST['street_num'])) {
    $street_num = trim($_POST['street_num']);
} else {
    $streetNumError = "You have to enter your city.";
}

if (!empty($_POST['zip'])) {
    $zip = trim($_POST['zip']);
    $zip = str_replace(' ', '', $zip);
} else {
    $zipError = "You have to enter your city.";
}

if (!empty($_POST['comment'])) {
    $comment = trim($_POST['comment']);
}

if (!empty($_POST['agree']) && $_POST['agree'] == true) {
    $agree = $_POST['agree'];
} else {
    $agreeError = "You have to agree to our terms.";
}

/*3. ,
. Sa desne strane trebaju da budu ispisan 
proizvod koji se kupuje po sopstvenoj zelji. Na dugme BUY trebaju se iskoristiti svi parametri 
sa forme kao i proizvoda da se ispise nesto o uspesnoj kupovini. Izvrsiti validaciju polja na
 formi i u slucaju da se desi greska ispisati odgovarajucu gresku ispod odgovarajuceg
 inputa.
 */